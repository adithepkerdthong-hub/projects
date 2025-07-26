<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'output' => 'Method Not Allowed']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
$command = $input['command'] ?? '';

if (empty($command)) {
    echo json_encode(['success' => false, 'output' => 'ไม่มีคำสั่งที่ต้องการรัน']);
    exit;
}

// Whitelist of allowed commands for security
$allowedCommands = [
    './git-auto.sh',
    'git status',
    'git log --oneline -5',
    'git log --oneline -10',
    'git branch',
    'git remote -v',
    'chmod +x git-auto.sh',
    'ls -la'
];

$isAllowed = false;
foreach ($allowedCommands as $allowed) {
    if (strpos($command, $allowed) === 0) {
        $isAllowed = true;
        break;
    }
}

if (!$isAllowed) {
    echo json_encode([
        'success' => false, 
        'output' => 'คำสั่งนี้ไม่ได้รับอนุญาต เพื่อความปลอดภัย\n\nคำสั่งที่อนุญาต:\n' . implode('\n', $allowedCommands)
    ]);
    exit;
}

try {
    // Change to the correct directory
    $workingDir = __DIR__;
    chdir($workingDir);
    
    // Execute the command
    $output = '';
    $returnCode = 0;
    
    // Add timeout and error handling
    $descriptors = [
        0 => ['pipe', 'r'],  // stdin
        1 => ['pipe', 'w'],  // stdout
        2 => ['pipe', 'w']   // stderr
    ];
    
    $process = proc_open($command, $descriptors, $pipes, $workingDir);
    
    if (is_resource($process)) {
        // Close stdin
        fclose($pipes[0]);
        
        // Read stdout and stderr
        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        
        fclose($pipes[1]);
        fclose($pipes[2]);
        
        // Get the exit code
        $returnCode = proc_close($process);
        
        // Combine output
        $output = $stdout;
        if (!empty($stderr)) {
            $output .= "\n--- Errors ---\n" . $stderr;
        }
        
        // Add timestamp
        $timestamp = date('Y-m-d H:i:s');
        $output = "[$timestamp] รันคำสั่ง: $command\n\n" . $output;
        
        echo json_encode([
            'success' => $returnCode === 0,
            'output' => $output,
            'return_code' => $returnCode,
            'command' => $command,
            'timestamp' => $timestamp
        ]);
        
    } else {
        throw new Exception('ไม่สามารถรันคำสั่งได้');
    }
    
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'output' => 'เกิดข้อผิดพลาด: ' . $e->getMessage() . "\n\n💡 ลองรันคำสั่งใน terminal แทน:\n" . $command,
        'error' => $e->getMessage()
    ]);
}
?>
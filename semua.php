<?php
// --- 1. ARRAY ---
$nilai = [80, 75, 90, 85, 70];
echo "<h3>1. ARRAY</h3>";
echo "Daftar Nilai: <br/>";
foreach ($nilai as $n) {
    echo "- $n <br/>";
}
$total = array_sum($nilai);
$rata_rata = $total / count($nilai);
echo "Total Nilai: $total <br/> Rata-rata: $rata_rata <hr/>";

// --- DEFINISI CLASS (Hanya satu kali di sini) ---
// Kita buat properti yang lengkap agar bisa dipakai di Linked List maupun Tree
class Node {
    public $data;
    public $next;  // Untuk Linked List
    public $left;  // Untuk Tree
    public $right; // Untuk Tree

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
        $this->left = null;
        $this->right = null;
    }
}

// --- 2. LINKED LIST ---
echo "<h3>2. LINKED LIST</h3>";
$node1 = new Node(10);
$node2 = new Node(20);
$node3 = new Node(30);
$node1->next = $node2; 
$node2->next = $node3; 

$current = $node1; 
while ($current != null) {
    echo $current->data . ($current->next ? " -> " : "");
    $current = $current->next;
}
echo "<hr/>";

// --- 3. STACK ---
echo "<h3>3. STACK (LIFO)</h3>";
$stack = [];
array_push($stack, 10, 20, 30);
echo "Pop: " . array_pop($stack) . "<br/>";
echo "Isi Stack: " . implode(", ", $stack) . "<hr/>";

// --- 4. QUEUE ---
echo "<h3>4. QUEUE (FIFO)</h3>";
$queue = [];
array_push($queue, "A", "B", "C");
echo "Dequeue: " . array_shift($queue) . "<br/>";
echo "Isi Queue: " . implode(" <- ", $queue) . "<hr/>";

// --- 5. TREE ---
echo "<h3>5. BINARY TREE</h3>";
$root = new Node("Root (A)");       
$root->left = new Node("Child Kiri (B)");   
$root->right = new Node("Child Kanan (C)");

function tampilkanTree($node, $level = 0) {
    if ($node != null) {
        echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $level) . "└── " . $node->data . "<br/>";
        tampilkanTree($node->left, $level + 1);
        tampilkanTree($node->right, $level + 1);
    }
}
tampilkanTree($root);
echo "<hr/>";

// --- 6. GRAPH ---
echo "<h3>6. GRAPH (Adjacency List)</h3>";
$graph = ["A" => ["B", "C"], "B" => [], "C" => []];
foreach ($graph as $node => $tetangga) {
    echo "Node $node -> " . (empty($tetangga) ? "-" : implode(", ", $tetangga)) . "<br/>";
}
echo "<hr/>";

// --- 7. HASH TABLE ---
echo "<h3>7. HASH TABLE</h3>";
$mahasantri = ["2024001" => "Ahmad", "2024002" => "Zaidan"];
echo "NIM 2024002 adalah: " . $mahasantri["2024002"];
?>
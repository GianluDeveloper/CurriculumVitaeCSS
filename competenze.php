<?php
// sicurezza da inclusioni
if (!defined('SECURITY')) {
    include 'index.php';
    exit(0);
}
include 'dbHandling.php';

class Competenze
{
    private $sql = 'SELECT * FROM competenze WHERE  1;';
    public function __construct()
    {
        $this->databaseObj = new db();
        $this->databaseObj->init();
    }
    public function print()
    {
        $contatore = 0;
        $buffer = '';
        if ($results = $this->databaseObj->query($this->sql)) {
            while ($risultato = $results->fetch_assoc()) {
                $buffer .= '<td>' . $risultato['competenza'] . '</td>';
                $contatore++;
                if ($contatore % MAX_PER_COLUMN == 0) {
                    $this->printColumn($buffer);
                    $buffer = '';
                }
            }

            $results->free();
        } else {
            die($results);
        }
        if (strlen($buffer) > 0) {
            $this->printColumn($buffer);
        }
    }

    private function printColumn($data)
    {
        echo "<tr>$data</tr>";
    }
}

// esegue la classe on import
$oggetto = new Competenze();
$oggetto->print();

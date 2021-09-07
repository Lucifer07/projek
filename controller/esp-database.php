<?php
    $servername = "localhost";
    // Your Database name
    $dbname = "monitoringjasamarga";
    // Your Database user
    $username = "root";
    // Your Database user password
    $password = "root";
// CRUD Untuk mengambil data board ESP32. yang berguna untuk merekam setiap state 0 dan 1 dan mengupdate ke database, yang dijadikan bahan ketika web ditekan on maka database akan update 1 begitu juga sebaliknya,dan di Arduino IDE (folder MAINESP32 :esp-outputs-action.php) akan GET data header pada server berupa JSON yang diolah ke ESP32. 
    function createOutput($kwhR,$powerR) {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO panel2(kwh,daya) VALUES ('" . $kwhR . "', '" . $powerR . "')";

       if ($conn->query($sql) === TRUE) {
            return "New output created successfully";
        }
        else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    function deleteOutput($id) {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM Outputs WHERE id='". $id .  "'";

       if ($conn->query($sql) === TRUE) {
            return "output deleted successfully";
        }
        else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    function updateOutput($id, $state) {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE outputs SET state='" . $state . "' WHERE id='". $id .  "'";

       if ($conn->query($sql) === TRUE) {
            return "Output state updated successfully";
        }
        else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    function getAllOutputs() {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, name, board, gpio, state FROM Outputs ORDER BY board";
        if ($result = $conn->query($sql)) {
            return $result;
        }
        else {
            return false;
        }
        $conn->close();
    }

    function getAllOutputStates($board) {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT gpio, state FROM outputs WHERE board='" . $board . "'";
        if ($result = $conn->query($sql)) {
            return $result;
        }
        else {
            return false;
        }
        $conn->close();
    }

    function getOutputBoardById($id) {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id,name,board,state FROM outputs WHERE id='" . $id . "'";
        if ($result = $conn->query($sql)) {
            return $result;
        }
        else {
            return false;
        }
        $conn->close();
    }
    function getOutputBoardByBoard($board_id) {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT name,board,state,id FROM outputs WHERE board='" . $board_id . "'";
        if ($result = $conn->query($sql)) {
            return $result;
        }
        else {
            return false;
        }
        $conn->close();
    }

    function updateLastBoardTime($board) {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE Boards SET last_request=now() WHERE board='". $board .  "'";

       if ($conn->query($sql) === TRUE) {
            return "Output state updated successfully";
        }
        else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    function getAllBoards() {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT board, last_request FROM Boards ORDER BY board";
        if ($result = $conn->query($sql)) {
            return $result;
        }
        else {
            return false;
        }
        $conn->close();
    }

    function getBoard($board) {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT board, last_request FROM Boards WHERE board='" . $board . "'";
        if ($result = $conn->query($sql)) {
            return $result;
        }
        else {
            return false;
        }
        $conn->close();
    }

    function createBoard($board) {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO Boards (board) VALUES ('" . $board . "')";

       if ($conn->query($sql) === TRUE) {
            return "New board created successfully";
        }
        else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    function deleteBoard($board) {
        global $servername, $username, $password, $dbname;

        // Membuat koneksi ke Database
        $conn = new mysqli($servername, $username, $password, $dbname);
        // cek koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM Boards WHERE board='". $board .  "'";

       if ($conn->query($sql) === TRUE) {
            return "Board deleted successfully";
        }
        else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

?>

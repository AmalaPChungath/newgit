<html>
    <title>film information</title>
    <style>
        body{
            background-color: rgba(34, 123, 400, 0.056);
        }
        td,th{
            text-align: center;
        }
    </style>
    <body>
        <center>
        <form method="post">
             <table>
                    <tr>
                        <th>Movie Name</th>
                        <th>Director</th>
                        <th>Actor</th>
                        <th>Year</th>
                    </tr>
                    <?php
                    for($i=1;$i<5;$i++)
                    {
                        $filmname="fimname".$i;
                        $director="director".$i;
                        $actor="actor".$i;
                        $year="year".$i;
                        //$rating="rating".$i;
                    ?>
                    <tr>
                        <td><input type="text" name=<?php echo $filmname; ?>></td>
                        <td><input type="text" name=<?php echo $director; ?>></td>
                        <td><input type="text" name=<?php echo $actor; ?>></td>
                        <td><input type="number" name=<?php echo $year; ?>></td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
                <input type="submit" name="sub" value="save">
        </form>
        </center>
        <?php
        if(isset($_POST['sub']))
        {
        ?>
        <center>
        <table cellpadding="10">
            <h4>List of Movies</h4>
            <tr>
                <th>Sl no.</th>
                <th>Movie Name</th>
                <th>Director</th>
                <th>Actor</th>
                <th>Year</th>
            </tr>
            <?php
            $i=1;
            for($i=1;$i<5;$i++)
            {
                $filmname="fimname".$i;
                $director="director".$i;
                $actor="actor".$i;
                $year="year".$i;
                //$rating="rating".$i;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $_POST[$filmname]; ?></td>
                <td><?php echo $_POST[$director]; ?></td>
                <td><?php echo $_POST[$actor]; ?></td>
                <td><?php echo $_POST[$year]; ?></td>
            </tr>
        <?php
            }
        }
        ?>
        </table>
        </center>
    </body>
</html>

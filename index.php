<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 4.4 fonction</title>
    </head>
    <body >
        <p>
            <?php
            function functionCompareNumber( $inputNb1, $inputNb2)
            {
                if ($inputNb1 > $inputNb2)
                {
                    $result='Le premier nombre est plus grand';
                }
                else
                {
                    if ($inputNb1 < $inputNb2)
                    {
                        $result='Le premier nombre est plus petit';
                    }
                    else
                    {
                        $result= 'Les deux nombres sont identiques ';
                    }
                }
                return $result;
            }
            echo functionCompareNumber(3,5);
            ?>
       </p>
    </body>
</html>
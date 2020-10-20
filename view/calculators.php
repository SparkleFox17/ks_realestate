<?php
include("./template/pageHead.php");
?>
<div id="calculators">
    <div class="page">
        <div class="write-up">
        
            <?php
                if (makeSEOURL($page) === "mortgage-calculator") {
                    echo "ugh math";
                } else if (makeSEOURL($page) === "cmhc-insurance-calculator") {
                    echo "math is too hard";
                } else if (makeSEOURL($page) === "land-transfer-tax-calculator") {
                    echo "want to get rich meeeooowwwwwnnoowww";
                } else if (makeSEOURL($page) === "mortgage-affordability-calculator") {
                    echo "want a house...5 mansions";
                }
            ?>
        </div>
        <div class="calculator">

            <?php
                if (makeSEOURL($page) === "mortgage-calculator") {
                    echo "calc-1";
                } else if (makeSEOURL($page) === "cmhc-insurance-calculator") {
                    echo "calc-2";
                } else if (makeSEOURL($page) === "land-transfer-tax-calculator") {
                    echo "calc-3";
                } else if (makeSEOURL($page) === "mortgage-affordability-calculator") {
                    echo "calc-4";
                }
            ?>
        </div>
    </div>
</div>
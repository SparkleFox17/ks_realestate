<?php
include("./template/pageHead.php");
?>
<div id="calculators">
    <div class="page">
        <div class="write-up">
        
            <?php
                if (makeSEOURL($page) === "mortgage-calculator") {
                    echo "content";
                } else if (makeSEOURL($page) === "cmhc-insurance-calculator") {
                    echo "content";
                } else if (makeSEOURL($page) === "land-transfer-tax-calculator") {
                    echo "content";
                } else if (makeSEOURL($page) === "mortgage-affordability-calculator") {
                    echo "content";
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
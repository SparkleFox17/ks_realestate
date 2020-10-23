<?php
if ($service === "invest") {
    $paragraph = "As a real estate investor myself, I understand better than anyone what makes a great deal versus a market deal. Let me help you analyze and execute your next deal, whether its investment 1 or 100.";
}
else if ($service === "sell") {
    $paragraph = "Time to Move On? Let me share my Full Service, No Pressure plan to get your property SOLD for the highest possible price, with the least amount of stress.";
}
else if ($service === "buy") {
    $paragraph = "Dream Home, Next Home or First Home. Let me help find the perfect fit for you. I combine your wishlist with my wisdom. I am a No Pressure Agent that works around your schedule.";
}

//include("./template/pageHead.php");
?>


<div id="services">
    <div class="page">
        <!--slider 3-4 imgs--> 
        <div class="content">
            <h1><?php echo undoSEOURL($service); ?></h1>
            <p>
            <?php echo $paragraph; ?>    
            </p> 

            <!--<a href="<?php echo SITEPATH; ?>/contact/<?php echo $service; ?>">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Contact
                </button>
            </a>-->
        </div>
    </div>
</div>










            
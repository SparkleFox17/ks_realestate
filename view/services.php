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

include("./template/pageHead.php");
?>


<div id="services">
    <div class="page">
        <div class="services-slider">
            <!--slider 3-4 imgs--> 
            <div class="">
                <?php echo $paragraph; ?>    
                <!--content about buy well --> 
                <p>Invest</p>
                <p>Buy</p>
                <p>Sell</p> 
            </div>
        </div>
    </div>
</div>










            
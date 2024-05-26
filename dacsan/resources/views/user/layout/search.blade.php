 <!-- SEARCH ---------------------------------------------------------------------------------------------------------------------- -->
    <div class="w3-white">
        <div class="w3-container w3-center" style="padding:80px 0px 20px 0px;">
            <h1>ĐẶC SẢN TRÀ VINH</h1>
        </div>
    </div> 
    <div class="w3-container w3-row w3-margin-bottom">
        <div id="search">
        <form action="{{route('page.search')}}" method="get">
            <div class="w3-container w3-row search">
            <div class="w3-rest">
                <input type="text" class="w3-input w3-border w3-round-large w3-hover-border-green"name="key"  placeholder="Tìm kiếm" style="width: 500px"/>
            </div>
            <div class="w3-margin-left">
            <button type="submit"  class="w3-button w3-hover-green w3-round-large">
                <i class="w3-xlarge fa fa-search"></i>
            </button>
            </div>
            </div>
        </form>  
        </div>
    </div>
<!-- SLIDER ---------------------------------------------------------------------------------------------------------------------- -->
    <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">  
        <div class="w3-content w3-display-container w3-card-4 w3-round-large">   
            <img class="mySlides w3-animate-left w3-round-large" src="admin/images/1.1.png" style="width:100%">
            <img class="mySlides w3-animate-top w3-round-large" src="admin/images/1.2.png" style="width:100%">
            <img class="mySlides w3-animate-right w3-round-large" src="admin/images/1.3.png" style="width:100%">       
        </div>
    </div>
 
<style>
    #form_container{
        width:800px;border-radius: 15px;min-height: 200px;margin-top:10px;


    }
    #middle-wizard{
        margin-left:7%;margin-right:1%;
    }
    .starClass{
        margin-top:-100px

    }


    @media screen and (max-width: 768px) {

        #form_container{
            width:auto;border-radius: 15px;min-height: 50px;margin-top:0px;
}
#middle-wizard{
        margin-left:0px;margin-right:0px;

    }
    .starClass{
        margin-top:00px

    }



    }
</style>
<?php
            $result = $con->query("SELECT * from onthego_review LIMIT 7");

            if(mysqli_num_rows($result) > 0) {

               while($row=mysqli_fetch_assoc($result)){
                  $name = $row['name'];
                  $review = $row['review_text'];
                  $timestamp = $row['timestamp'];
                  $rating = $row['rating']; 
                  
                  if($rating == '1' )
                  {
                     $check1 = "checked";
                     $check2 = "";
                     $check3 = "";
                     $check4 = "";
                     $check5 = "";
                  }
                  else if($rating == '2') 
                  {
                     $check1 = "checked";
                     $check2 = "checked";
                     $check3 = "";
                     $check4 = "";
                     $check5 = "";
                  }
                  else if($rating == '3') 
                  {
                     $check1 = "checked";
                     $check2 = "checked";
                     $check3 = "checked";
                     $check4 = "";
                     $check5 = "";
                  }
                  else if($rating == '4') 
                  {
                     $check1 = "checked";
                     $check2 = "checked";
                     $check3 = "checked";
                     $check4 = "checked";
                     $check5 = "";
                  }
                  else if($rating == '5') 
                  {
                     $check1 = "checked";
                     $check2 = "checked";
                     $check3 = "checked";
                     $check4 = "checked";
                     $check5 = "checked";
                  }
                 


        echo '



                  <main>
    <div id="form_container" >
        <div class="row" style="border-radius: 25px;">
            <div class="col-lg-12">

                <div id="wizard_container">


                    <form id="review-form" method="POST" action="submit-review-classic.php" style="font-family: "Gilroy-Regular;"">


                        <div id="middle-wizard" >
                        <span class="starClass">
                        <input type="radio" '.$check5.' class="required rating-input"  value="5"><label for="rating-input-1-5" class="rating-star"></label>
                        <input type="radio" '.$check4.' class="required rating-input"  value="4"><label for="rating-input-1-4" class="rating-star"></label>
                        <input type="radio" '.$check3.' class="required rating-input"  value="3"><label for="rating-input-1-3" class="rating-star"></label>
                        <input type="radio" '.$check2.' class="required rating-input"  value="2"><label for="rating-input-1-2" class="rating-star"></label>
                        <input type="radio"  '.$check1.' class="required rating-input" value="1 "><label for="rating-input-1-1" class="rating-star"></label>
                                   </span>
                            <div class="step">
                                <h3 class="main_question" style="font-weight:500;font-family: "Gilroy-Regular";">'.$name.'</h3>
                                
                                <div class="row">
                                    <div class="col-md-12" style="margin-top:-3%">
                                        <div class="form-group clearfix">
                                        
                                            <label class="rating_type" style="font-family: "Gilroy-Regular;"" >'.$timestamp.'</label>
                                         
                                        </div>

                                        <div class="blog-slider__text" style="font-family: "Gilroy-Regular;"">' . $review . '</div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>
                  
                  ';
    }
}

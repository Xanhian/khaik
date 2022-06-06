 <div class="row justify-content-center mt-0">
     <div class="card px-0 pb-0 mb-3">
         <div class="row">
             <div class="mx-0">
                 <form id="msform">
                     <!-- progressbar -->

                     <ul id="progressbar" class="col text-center mx-auto">
                         <li class="active" id="account">
                             <strong>Personal</strong>
                         </li>

                         <li id="payment"><strong>Restaurant</strong></li>

                         <li id="confirm"><strong>Restaurant</strong></li>
                         <li id="confirm"><strong>Location</strong></li>
                     </ul>

                     <!-- fieldsets -->
                     <fieldset id="fs1">
                         <h3 class="text-dark my-4">Account Information</h3>
                         <input type="text" name="firstname" placeholder="First Name" />
                         <input type="text" name="lastname" placeholder="Last Name" />
                         <input type="email" name="email" placeholder="Email" />
                         <input type="password" name="pwd" placeholder="Password" />
                         <input type="password" name="cpwd" placeholder="Confirm Password" />

                         <input type="button" name="next" class="next action-button" value="Next Step" />
                     </fieldset>

                     <fieldset id="fs2">
                         <h3 class="text-dark my-4">Restaurant Information</h3>
                         <input type="text" name="Restaurant" placeholder="Restaurant name" />
                         <input type="text" name="restaurant_description" placeholder="Restaurant description" />

                         <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                         <input type="button" name="next" class="next action-button" value="Next Step" />
                     </fieldset>

                     <fieldset id="fs3">
                         <h3 class="text-dark my-4">Restaurant Information</h3>
                         <p>Restaurant header photo</p>
                         <input type="file" name="restaurant_header_photo" placeholder="Restaurant name" />
                         <input type="number" name="restaurant_phonenumber" placeholder="Restaurant phonenumber" />

                         <input type="text" name="restaurant_facebooklink" placeholder="Restaurant facebook link" />

                         <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                         <input type="button" name="next" class="next action-button" value="Next Step" />
                     </fieldset>
                     <fieldset id="fs5">
                         <h3 class="text-dark my-4">Location</h3>

                         <input type="text" name="restaurant_addres" placeholder="Restaurant addres" />

                         <select name="restaurant_place" id="">
                             <option value="paramaribo">Paramaribo</option>
                         </select>

                         <select name="restaurant_country" id="">
                             <option value="paramaribo">Suriname</option>
                         </select>
                         <br />
                         <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                         <input type="button" name="next" class="next action-button" value="Finish" />
                     </fieldset>

                     <fieldset id="fs5">
                         <h2 class="fs-title text-center">Success !</h2>
                         <br /><br />
                         <div class="row justify-content-center">
                             <div class="col-3">
                                 <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image" />
                             </div>
                         </div>
                         <br /><br />
                         <div class="row justify-content-center">
                             <div class="col-7 text-center">
                                 <h5>You Have Successfully Signed Up</h5>
                             </div>
                         </div>
                     </fieldset>
                 </form>
             </div>
         </div>
     </div>
 </div>
               <section>

                <h1>Swedish meatballs</h1>

                <img class="recipeImage" src="<?php echo base_url();?>/assets/images/meatball.jpg" alt="Swedish meatballs">

                <!--Ingredient section-->
                <div class="left">
                    <h2>Ingredients</h2>
                    <ul>
                        <li>2 slices fresh white bread</li>
                        <li>¼ c. milk</li>
                        <li>3 tbsp. clarified butter</li>
                        <li>½ c. finely chopped onion</li>
                        <li>1 tsp. kosher salt</li>
                        <li>¾ lb. ground chuck</li>
                        <li>¾ lb. ground pork</li>
                        <li>2 large egg yolks</li>
                        <li>½ tsp. black pepper</li>
                        <li>¼ tsp. ground allspice</li>
                        <li>¼ tsp. freshly grated nutmeg</li>
                        <li>¼ c. all-purpose flour</li>
                        <li>3 c. beef broth</li>
                        <li>¼ c. heavy cream</li>
                    </ul>
                </div>

                <!--Instruction section-->
                <div class="middle">
                    <h2>Directions</h2>
                    <p><strong>Prep:</strong> 30 min <strong>Cook:</strong> 25 min <strong>Ready in:</strong> 55 min</p>
                    <ol>
                        <li>
                            Preheat oven to 200 degrees F.
                        </li>
                        <li>
                            Tear the bread into pieces and place in a small mixing bowl along with the milk. Set aside.
                        </li>
                        <li>
                            In a 12-inch straight sided saute pan over medium heat, melt 1 tablespoon of the butter. Add the onion and a pinch of salt and sweat until the onions are soft. Remove from the heat and set aside.
                        </li>
                        <li>
                            In the bowl of a stand mixer, combine the bread and milk mixture, ground chuck, pork, egg yolks, 1 teaspoon of kosher salt, black pepper, allspice, nutmeg, and onions. Beat on medium speed for 1 to 2 minutes.
                        </li>

                        <li>
                            Using a scale, weigh meatballs into 1-ounce portions and place on a sheet pan. Using your hands, shape the meatballs into rounds.
                        </li>

                        <li>
                            Heat the remaining butter in the saute pan over medium-low heat, or in an electric skillet set to 250 degrees F. Add the meatballs and saute until golden brown on all sides, about 7 to 10 minutes. Remove the meatballs to an ovenproof dish using a slotted spoon and place in the warmed oven.
                        </li>

                        <li>
                            Once all of the meatballs are cooked, decrease the heat to low and add the flour to the pan or skillet. Whisk until lightly browned, approximately 1 to 2 minutes. Gradually add the beef stock and whisk until sauce begins to thicken. Add the cream and continue to cook until the gravy reaches the desired consistency. Remove the meatballs from the oven, cover with the gravy and serve.
                        </li>
                    </ol>
                </div>

                <!-- Comment section -->
                <div class="right">
                    <div class="comments">

                    <?php if($this->session->userdata('logged_in')) : ?>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('comments/create'); ?>
                        <?php echo '<p class="commented-by">Commenting as: '.$this->session->userdata('username'). '</p>'; ?>
                        <br>
                        <textarea class="commentingbox" name="body"></textarea>
                        <input type="hidden" name="food" value="meatballs";>
                        <button type="submit" class="commentbutton">Comment</button>
                        <?php echo form_close(); ?>
                         <?php endif; ?>
                         <h2>Comments</h2>
                        <?php foreach($comments as $comment):
                            if($comment['food'] == 'meatballs'){?>
                                <div class="comment">
                                    <?php if($this->session->userdata('username') == $comment['username']) : ?>
                                    <?php echo form_open('comments/delete/'.$comment['id']); ?>
                                    <button type="submit" value="Delete" class="deletebutton">Delete</button>
                                    <input type="hidden" name="food" value="meatballs";>
                                    <?php echo form_close(); ?>
                            <?php endif; ?>
                                <div class="comment-box"
                                    <h3>Commented by: <?php echo $comment['username']; ?></h3>
                                    <p><?php echo $comment['comment']; ?></p>
                                </div>
                                </div>
                        <?php } endforeach; ?>
                    </div>
                </div>
</section>

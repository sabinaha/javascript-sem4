<section>

                <h1>American pancakes</h1>
                <img class="recipeImage" src="<?php echo base_url();?>/assets/images/pancakes.jpg" alt="American pancakes">

                <div class="left">

                    <h2>Ingredients</h2>
                    <ul>
                        <li>150g plain flour</li>
                        <li>½ teaspoon salt</li>
                        <li>1 tablespoon baking powder</li>
                        <li>1 teaspoon caster sugar</li>
                        <li>225ml milk</li>
                        <li>1 egg</li>
                        <li>1 knob of butter, melted</li>
                        <li>butter or oil for frying</li>
                    </ul>
                </div>

                <div class="middle">
                    <h2>Directions</h2>
                    <p><strong>Prep:</strong> 10 min <strong>Cook:</strong> 15 min <strong>Ready in:</strong> 25 min</p>
                    <ol>
                        <li>
                            Sift together the flour, salt, baking powder and sugar. Make a well in the centre. Pour in the milk, then add the egg and melted butter. Beat well till the pancake batter is smooth.
                        </li>
                        <li>
                            Heat a frying pan over medium heat. Lightly grease with butter or vegetable oil. To test to see if the pan is hot enough, flick a bit of water on the pan. If it sizzles, it is ready. Ladle the pancake batter into the pan.
                        </li>
                        <li>
                            Cook each pancake till bubbles appear on the surface and the edges have gone slightly dry. Flip each pancake and cook for a minute or two on the reverse side, till golden brown.
                        </li>
                        <li>
                            Serve hot with your favourite toppings, such as maple syrup and fresh berries. Enjoy!
                        </li>
                    </ol>
                </div>
                <div class="right">
                    <div class="comments">
    <?php if($this->session->userdata('logged_in')) : ?>
    <?php echo validation_errors(); ?>
    <?php echo form_open('comments/create'); ?>
    <?php echo 'Commenting as: '.$this->session->userdata('username'); ?>
    <textarea class="commentingbox" name="body"></textarea>
    <input type="hidden" name="food" value="pancake";>
    <button type="submit" class="commentbutton">Comment</button>
    <?php echo form_close(); ?>
     <?php endif; ?>
    <h2>Comments:</h2>
    <?php foreach($comments as $comment):
         if($comment['food'] == 'pancake'){?>
    <div class="comment">
        <?php if($this->session->userdata('username') == $comment['username']) : ?>
        <?php echo form_open('comments/delete/'.$comment['id']); ?>
        <button type="submit" value="Delete" class="deletebutton">Delete</button>
        <input type="hidden" name="food" value="pancake";>
        <?php echo form_close(); ?>
        <?php endif; ?>
        <h3 class="commentusername"><?php echo $comment['username']; ?></h3>
        <p><?php echo $comment['comment']; ?></p>
    </div>
    <?php } endforeach; ?>

</div>
                    </div>
                </div>
            </section>

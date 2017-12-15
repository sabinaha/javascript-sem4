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
                <button id="showForm">add comment</button>
            <?php endif; ?>
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add a comment</h4>
                        </div>
                        <div class="modal-body">
                            <form id="myForm" action="<?php echo base_url() ?>comments/addComment" method="POST">
                                <input id="foodcomment" type="hidden" name="food" value="pancake";>
                                <textarea name="body"></textarea>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="addcomment">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <h2>Comments:</h2>

            <div id="commentsarea"></div>


        </div>
    </div>
</section>

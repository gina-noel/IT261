<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label for="name">Name</label>
        <input type="text" name="name" id="textbox" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>
">
        <span class="error">
            <?php echo $name_Err; ?>
        </span>


        <!-- email -->
        <label for="email>">Email</label>
        <input type="email" name="email" id="textbox" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>
">
        <span class="error">
            <?php echo $email_Err; ?>
        </span>

        <!-- phone -->
        <label for="phone>">Phone Number</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>
">
        <span class="error">
            <?php echo $phone_Err; ?>
        </span>


        <!--checkboxes-->
        <label for="yogaStyle>">Favorite Yoga Style</label>
        <ul>
            <li>
                <input type="checkbox" name="yogaStyle[]" value="vinyasa"<?php if(isset($_POST['yogaStyle']) && in_array('vinyasa', $yogaStyle)) echo 'checked="checked"'; ?>
                >Vinyasa
            </li>
            <li>
                <input type="checkbox" name="yogaStyle[]" value="hatha"<?php if(isset($_POST['yogaStyle']) && in_array('hatha', $yogaStyle)) echo 'checked="checked"'; ?>>Hatha
            </li>
            <li>
                <input type="checkbox" name="yogaStyle[]" value="restorative"<?php if(isset($_POST['yogaStyle']) && in_array('restorative', $yogaStyle)) echo 'checked="checked"'; ?>>Restorative
            </li>
            <li>
                <input type="checkbox" name="yogaStyle[]" value="kundalini"<?php if(isset($_POST['yogaStyle']) && in_array('kundalini', $yogaStyle)) echo 'checked="checked"'; ?>>Kundalini
            </li>
            <li>
                <input type="checkbox" name="yogaStyle[]" value="ashtanga"
                    <?php if(isset($_POST['yogaStyle']) && in_array('ashtanga', $yogaStyle)) echo 'checked="checked"'; ?>>Ashtanga
            </li>
        </ul>
        <span class="error">
                <?php echo $yogaStyle_Err; ?>
            </span>

        <!--dropdown-->
        <label for="studioLocation">Studio Location</label>
        <select name="studioLocation">
            <option value="" NULL
                <?php if(isset($_POST['studioLocation']) && $_POST['studioLocation'] == NULL) echo 'selected="unselected"';?>
            >Select One</option>
            <option value="ba"<?php if(isset($_POST['studioLocation']) && $_POST['studioLocation'] == 'ba') echo 'selected="selected"';?>
            >Bali</option>
            <option value="in"<?php if(isset($_POST['studioLocation']) && $_POST['studioLocation'] == 'in') echo 'selected="selected"';?>
            >India</option>
            <option value="ca"<?php if(isset($_POST['studioLocation']) && $_POST['studioLocation'] == 'ca') echo 'selected="selected"';?>
            >Canada</option>
            <option value="au"<?php if(isset($_POST['studioLocation']) && $_POST['studioLocation'] == 'au') echo 'selected="selected"';?>
            >Australia</option>
            <option value="uk"<?php if(isset($_POST['studioLocation']) && $_POST['studioLocation'] == 'uk') echo 'selected="selected"';?>
            >United Kingdom</option>
            <option value="sw"<?php if(isset($_POST['studioLocation']) && $_POST['studioLocation'] == 'sw') echo 'selected="selected"';?>
            >Switzerland</option>
        </select>
        <span class="error">
            <?php echo $studioLocation_Err; ?>
        </span>


        <label for="privacy">Privacy</label>
        <ul>
            <li><input type="radio" name="privacy" value="agree"<?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"';?>
                >I agree</li>
        </ul>
        <span class="error">
            <?php echo $privacy_Err; ?>
        </span>

        <input type="submit" value="Send it">
        <p><a href="">Reset</a></p>

    </fieldset>
</form>
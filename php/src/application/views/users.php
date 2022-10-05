<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="<?php base_url(); ?>assets/vendor/bootstrap.min.css">
</head>

<body>

    <div id="container">
        <h1>Example Data Users</h1>
        <div id="body">
            <h3>Create Table Users</h3>
            <code>
                create table users (
                id INT,
                first_name VARCHAR(50),
                last_name VARCHAR(50),
                email VARCHAR(50),
                gender VARCHAR(50)
                );
            </code>

            <h3>Create Users Data</h3>
            <code lang="sql">
                insert into users (id, first_name, last_name, email, gender) values (1, 'Felisha', 'Dillinton', 'fdillinton0@friendfeed.com', 'Female');
                insert into users (id, first_name, last_name, email, gender) values (2, 'Gweneth', 'Haggeth', 'ghaggeth1@cbc.ca', 'Female');
                insert into users (id, first_name, last_name, email, gender) values (3, 'Fawn', 'Skelhorne', 'fskelhorne2@java.com', 'Female');
                insert into users (id, first_name, last_name, email, gender) values (4, 'Harriot', 'Waud', 'hwaud3@seattletimes.com', 'Female');
                insert into users (id, first_name, last_name, email, gender) values (5, 'Lindsay', 'Sterricks', 'lsterricks4@alexa.com', 'Female');
                insert into users (id, first_name, last_name, email, gender) values (6, 'Ardith', 'Berends', 'aberends5@telegraph.co.uk', 'Female');
                insert into users (id, first_name, last_name, email, gender) values (7, 'Dela', 'Fayerbrother', 'dfayerbrother6@prlog.org', 'Female');
                insert into users (id, first_name, last_name, email, gender) values (8, 'Corrine', 'Zanolli', 'czanolli7@google.co.uk', 'Female');
                insert into users (id, first_name, last_name, email, gender) values (9, 'Mora', 'Gusney', 'mgusney8@bigcartel.com', 'Genderfluid');
                insert into users (id, first_name, last_name, email, gender) values (10, 'Blake', 'Audritt', 'baudritt9@about.me', 'Female');
            </code>

            <h3>Result</h3>

            <!-- no data -->
            <?php if (empty($users)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data is empty.
                <?php else : ?>
                    <div class="container">
                        <div class="row py-2 mt-4 fw-bold border-bottom ">
                            <div class="col">
                                ID
                            </div>
                            <div class="col">
                                First Name
                            </div>
                            <div class="col">
                                Last Name
                            </div>
                            <div class="col">
                                Email
                            </div>
                        </div>
                        <?php foreach ($users as $user) : ?>
                            <div class="row py-2">
                                <div class="col">
                                    <?= $user->id ?>
                                </div>
                                <div class="col">
                                    <?= $user->first_name ?>
                                </div>
                                <div class="col">
                                    <?= $user->last_name ?>
                                </div>
                                <div class="col">
                                    <?= $user->email ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </div>
                </div>
        </div>

</body>

</html>
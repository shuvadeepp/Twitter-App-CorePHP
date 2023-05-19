<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2 style="text-align: center;"> Twitter API Bind Data </h2><br><br><br><br><hr>
            <div class="col-12">
                <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col"> Sl No. </th>
                        <th scope="col"> Twitter ID </th>
                        <th scope="col"> Twitter ID STR </th>
                        <th scope="col"> Twitter user name </th>
                        <th scope="col"> Screen Name </th>
                        <th scope="col"> Location </th>
                        <th scope="col"> Followers Count </th>
                        <th scope="col"> Friends Count </th>
                        <th scope="col"> Favourites Count </th>
                        <th scope="col"> Verified Status </th>
                        <th scope="col"> Twitter Profile Image </th>
                        <th scope="col"> Twitter Profile Banner </th>
                    </tr>
                </thead>
                <?php 
                    include 'db.php';
                    $viewVars = "SELECT * FROM twitterapptable";
                    $bind = mysqli_query($conn,$viewVars);
                    // echo'<pre>';print_r($connecting);
                    $i = 0;
                    if(!empty($viewVars)){
                    while ($viewVars = mysqli_fetch_array($bind)) {
                        // echo'<pre>';print_r($viewVars);
                        $i++;
                ?>
                </tbody>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo !empty($viewVars['intTwitterId']) ? $viewVars['intTwitterId'] : ' -- ' ?></td>
                        <td><?php echo !empty($viewVars['intTwitterId_str']) ? $viewVars['intTwitterId_str'] : ' -- ' ?></td>
                        <td><?php echo !empty($viewVars['vchTwitterName']) ? $viewVars['vchTwitterName'] : ' -- ' ?></td>
                        <td><?php echo !empty($viewVars['vchScreenName']) ? $viewVars['vchScreenName'] : ' -- ' ?></td>
                        <td><?php echo !empty($viewVars['vchLocation']) ? $viewVars['vchLocation'] : ' -- ' ?></td>
                        <td><?php echo !empty($viewVars['vchFollowers_count']) ? $viewVars['vchFollowers_count'] : ' -- ' ?></td>
                        <td><?php echo !empty($viewVars['vchFriends_count']) ? $viewVars['vchFriends_count'] : ' -- ' ?></td>
                        <td><?php echo !empty($viewVars['vchFavourites_count']) ? $viewVars['vchFavourites_count'] : ' -- ' ?></td>
                        <?php if(!empty($viewVars['intTwitterVerified']) == 0){ ?>
                            <td style="color: red; font-weight: bold;   "><?php echo !empty($viewVars['intTwitterVerified'] == 0) ? 'Not Verified' : ' Verified ' ?></td>
                        <?php }else{?>
                            <td style="color: green; font-weight: bold;   "><?php echo !empty($viewVars['intTwitterVerified'] == 0) ? 'Not Verified' : ' Verified ' ?></td>
                        <?php }?>
                        <td><img src="<?php echo $viewVars['twitterProfile_image_url']?>" alt="Profile image" title="Profile Image" style="height: 49px; width: 50px; border-radius: 50%;"></td>
                        <td><img src="<?php echo $viewVars['twiterProfile_banner_url']?>" alt="banner Image" title="banner Image" style="height: 49px; width: 50px; border-radius: 50%;"></td>
                    </tr>
                </tbody>
                <?php 
                    }   
                }
                ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
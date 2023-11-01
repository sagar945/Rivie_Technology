
<?php include 'common/header.php'?>
<!-- 

<style>
    .search-box
    {
  width: fit-content;
  height: fit-content;
  position: relative;
  margin-left: 25%;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color: #22a6b3;
  padding-right: 40px;
  color:#fff;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}

.container-xxl
{
    background-image: url('img/2.jpg');
    height: 150px;
    background-repeat: cover;
}

#exportdata
{
    width:20%;
    float: right;
    display: block;
}
</style>   -->

   <!-- Search  Button Start -->
   <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
            <form action="" method="POST">
            <input type="text" name="get_id" placeholder="Enter ID">
            <input type="submit" name="search_by_id" value="Search">
        </form>
    </div>
</div>
    </div> 
    <?php
$con = mysqli_connect("localhost", "root", "", "rivietechnology");

if (isset($_POST['search_by_id']))
 {
    $id = $_POST['get_id'];
    $query = "SELECT * FROM students WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        echo "<table border='1' class='table border-primary'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Phone</th>";
        echo "<th>Designation</th>";
        echo "<th>Address</th>";
        echo "<th>Gender</th>";
        echo "</tr>";
        echo "</thead>";        
        echo "<br><br>";
        echo "<tbody>";
        while ($row = mysqli_fetch_assoc($query_run)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['designation'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<table border='1'>";
        echo "<tr><td colspan='6'>No records found</td></tr>";
        echo "</table>";
    }
}
    ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-secondary">Export in Excel / Pdf</a>
        </div>
    </div>
</div>
        

    <?php include 'common/footer.php'?>
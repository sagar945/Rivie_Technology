
<?php include 'common/header.php'?>

<style>
      button {
        display: inline-block;
        background-color: #0066cc;
        border-radius: 10px;
        border: 4px double #cccccc;
        color: #ffffff;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        width: 300px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }
      button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button:hover {
        background-color: #f7c2f9;
      }
      button:hover span {
        padding-right: 25px;
      }
      button:hover span:after {
        opacity: 1;
        right: 0;
      }
    </style>
 
 <div class="container-fluid pt-5" align="center">
    <div class="row">
        <div class="col-lg-12">
        <h2>Analysis</h2>
    <button>
      <span>Overall Analysis</span>
    </button>
        </div>

        <div class="col-lg-12">
    <button>
      <span><h4 class="text-white">Student-wise Analysis</h4></span>
    </button>
        </div>

        <div class="col-lg-12">
    <button>
      <span>Standard Report</span>
    </button>
        </div>
    </div>
 </div>
 





















<?php include 'common/footer.php'?>
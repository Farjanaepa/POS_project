<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-wpforms"></i>
                    <span>Bill</span>

                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-windows"></i>
                    <span>Product</span>

                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cart-plus"></i>
                    <span>Supplier</span>

                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-file-text"></i>
                    <span>CRM</span>

                </a>
            </li> 
            <li>
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Report</span>

                </a>
            </li>
            <li class="dropdown-container"><a href="#">
                <i class="fa fa-user"></i>
               <span> User Management</span>
            </a>
                <ul class="dropdown">
                    <li><a href="#">Manage-group</a> </li>
                    <li><a href="#">Manage-users</a> </li>
                    
                </ul>
            </li>

            

            
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>POS</h2>
                <h1>Dashboard</h1>
            </div>

           

            <div class="user--info">
                <button class="dropbtn"> 
                <i class="fa fa-user"></i>
                
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="#"> <span>Profile</span>  </a>
                    <a href="#"> <span>Settings</span>  </a>
                      <a href="#">  <span>Logout</span>  </a>
                    
                </div>
            </div>

        </div>

        <main class="main-container">
            <div class="main-cards">
    
                <div class="card">
                    <div class="card-inner">
                        <h3>PRODUCTS</h3>
                        <span class="material-icons-outlined">inventory_2</span>
                    </div>
                    <h1>249</h1>
                </div>
    
                
                <div class="card">
                    <div class="card-inner">
                        <h3>CATEGORIES</h3>
                        <span class="material-icons-outlined">category</span>
                    </div>
                    <h1>250</h1>
                </div>
    
                
                <div class="card">
                    <div class="card-inner">
                        <h3>CUSTOMERS</h3>
                        <span class="material-icons-outlined">groups</span>
                    </div>
                    <h1>2490</h1>
                </div>
    
                
                <div class="card">
                    <div class="card-inner">
                        <h3>ALERTS</h3>
                        <span class="material-icons-outlined">notification_important</span>
                    </div>
                    <h1>2</h1>
                </div>
    
            </div>

            <div class="charts">
                <div class="charts-card">
                    <h2 class="chart-title">Top 5 products</h2>
                    <div id="bar-chart"></div>

                </div>

                <div class="charts-card">
                    <h2 class="chart-title">Purchase and sales orders</h2>
                    <div id="area-chart"></div>

                </div>

            </div>
    
        </main>
        

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.48.0/apexcharts.min.js"></script>
   <script src="script.js"></script> 
</body>
</html>

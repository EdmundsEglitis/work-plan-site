<style> 
.navbar {
    display: flex;
    justify-content: space-around;
    background-color: #333;
    padding: 10px 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; 
}

.nav-item {
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    text-align: center;
}

.nav-item:hover {
    background-color: #575757;
    color: white;
}

.content {
    margin-top: 50px; 
    padding: 20px;
}

</style>
    <nav class="navbar">
        <a href="/user/register" class="nav-item">Register</a>
        <a href="/user/login" class="nav-item">Login</a>
    </nav>
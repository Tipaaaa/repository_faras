<?php echo $this->extend('template');
echo $this->section('content');
?>

<div class="content">
    <center>
        <div class="content-login">
            <h2>LOGIN</h2>
            <div class="form-login">
                <form action="/login/doLogin" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td><label for="username">Username</label></td>
                                <td><input type="text" id="username" name="username"></td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label></td>
                                <td><input type="password" id="password" name="password"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="user/lupa_pass">Lupa Password?</a></td>
                            </tr>
                            <tr>
                                <td colspan="2"><button style="border-radius: 10px; width:75px;">Login</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </center>
</div>



<?php echo $this->endSection(); ?>
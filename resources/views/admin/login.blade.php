<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 05:17:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <base href="{{asset('admincss')}}/" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min2167.css?v=3.2.0">
    <script
        nonce="bb72a381-c488-4f72-8bad-4d4cb90b6161">try { (function (w, d) { !function (j, k, l, m) { j[l] = j[l] || {}; j[l].executed = []; j.zaraz = { deferred: [], listeners: [] }; j.zaraz._v = "5621"; j.zaraz.q = []; j.zaraz._f = function (n) { return async function () { var o = Array.prototype.slice.call(arguments); j.zaraz.q.push({ m: n, a: o }) } }; for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p); j.zaraz.init = () => { var q = k.getElementsByTagName(m)[0], r = k.createElement(m), s = k.getElementsByTagName("title")[0]; s && (j[l].t = k.getElementsByTagName("title")[0].text); j[l].x = Math.random(); j[l].w = j.screen.width; j[l].h = j.screen.height; j[l].j = j.innerHeight; j[l].e = j.innerWidth; j[l].l = j.location.href; j[l].r = k.referrer; j[l].k = j.screen.colorDepth; j[l].n = k.characterSet; j[l].o = (new Date).getTimezoneOffset(); if (j.dataLayer) for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({ ...x[1], ...y[1] })), {}))) zaraz.set(w[0], w[1], { scope: "page" }); j[l].q = []; for (; j.zaraz.q.length;) { const z = j.zaraz.q.shift(); j[l].q.push(z) } r.defer = !0; for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith("_zaraz_"))).forEach((B => { try { j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B)) } catch { j[l]["z_" + B.slice(7)] = A.getItem(B) } })); r.referrerPolicy = "origin"; r.src = "../../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l]))); q.parentNode.insertBefore(r, q) };["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document) } catch (e) { throw fetch("/cdn-cgi/zaraz/t"), e; };</script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">

            @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
            @endif
            @if(Session::has('error'))  
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
            @endif
                <a href="../../index2.html" class="h1"><b>School</b>LMS</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{route('admin.authenticate')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                           
                        </div>
                    </div>
         
                            @error('email')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                           
                        </div>
                    </div>
                
                            @error('password')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                    </div>
                </form>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>

        </div>

    </div>


    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="dist/js/adminlte.min2167.js?v=3.2.0"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 05:17:02 GMT -->

</html>
<?php

/* DevLeaguesBundle::base.html.twig */
class __TwigTemplate_77c624a3805cce7cdb6e16886932d74d2125da8df53832bed403a0dae8d641f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d5ba2b3b8008af4cc208014d85f9798e5a4857967952441cd72196cb571e12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5ba2b3b8008af4cc208014d85f9798e5a4857967952441cd72196cb571e12d->enter($__internal_1d5ba2b3b8008af4cc208014d85f9798e5a4857967952441cd72196cb571e12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t    <meta charset=\"utf-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t    <meta name=\"description\" content=\"\">
\t    <meta name=\"author\" content=\"Fabien Blin\">
\t    <link rel=\"icon\" href=\"../../favicon.ico\">

\t    <title>DevLeagues.com</title>

\t    <!-- Bootstrap core CSS -->
\t    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
\t    <!-- <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->

\t    <!-- Custom styles for this template -->
\t    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/devleagues/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t    <!--[if lt IE 9]>
\t    \t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t    \t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t    <![endif]-->
\t</head>

\t<body>
\t\t";
        // line 31
        echo twig_include($this->env, $context, "DevLeaguesBundle::navbar.html.twig");
        echo "
\t    <div class=\"container\">
\t\t\t<div class=\"row starter-template\">
\t\t\t\t<div class=\"sidebar col-sm-3\">";
        // line 34
        echo twig_include($this->env, $context, "DevLeaguesBundle::sidebar.html.twig");
        echo "</div>
\t\t\t\t<div class=\"body col-sm-8\">";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t\t</div>
\t    </div><!-- /.container -->

\t    <!-- Bootstrap core JavaScript
\t    ================================================== -->
\t    <!-- Placed at the end of the document so the pages load faster -->
\t    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t    <script>window.jQuery || document.write('<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendor/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
\t    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
\t    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>
";
        
        $__internal_1d5ba2b3b8008af4cc208014d85f9798e5a4857967952441cd72196cb571e12d->leave($__internal_1d5ba2b3b8008af4cc208014d85f9798e5a4857967952441cd72196cb571e12d_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3d714b95a1a026110b116a11ecd75381d2a0c2ed5fe4cffa792d8b35ccc6847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d714b95a1a026110b116a11ecd75381d2a0c2ed5fe4cffa792d8b35ccc6847->enter($__internal_e3d714b95a1a026110b116a11ecd75381d2a0c2ed5fe4cffa792d8b35ccc6847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3d714b95a1a026110b116a11ecd75381d2a0c2ed5fe4cffa792d8b35ccc6847->leave($__internal_e3d714b95a1a026110b116a11ecd75381d2a0c2ed5fe4cffa792d8b35ccc6847_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  94 => 46,  89 => 44,  85 => 43,  74 => 35,  70 => 34,  64 => 31,  51 => 21,  45 => 18,  39 => 15,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t    <meta charset=\"utf-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t    <meta name=\"description\" content=\"\">
\t    <meta name=\"author\" content=\"Fabien Blin\">
\t    <link rel=\"icon\" href=\"../../favicon.ico\">

\t    <title>DevLeagues.com</title>

\t    <!-- Bootstrap core CSS -->
\t    <link href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

\t    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
\t    <!-- <link href=\"{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}\" rel=\"stylesheet\"> -->

\t    <!-- Custom styles for this template -->
\t    <link href=\"{{ asset('bundles/devleagues/css/main.css') }}\" rel=\"stylesheet\">

\t    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t    <!--[if lt IE 9]>
\t    \t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t    \t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t    <![endif]-->
\t</head>

\t<body>
\t\t{{ include('DevLeaguesBundle::navbar.html.twig') }}
\t    <div class=\"container\">
\t\t\t<div class=\"row starter-template\">
\t\t\t\t<div class=\"sidebar col-sm-3\">{{ include('DevLeaguesBundle::sidebar.html.twig') }}</div>
\t\t\t\t<div class=\"body col-sm-8\">{% block body %}{% endblock %}</div>
\t\t\t</div>
\t    </div><!-- /.container -->

\t    <!-- Bootstrap core JavaScript
\t    ================================================== -->
\t    <!-- Placed at the end of the document so the pages load faster -->
\t    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t    <script>window.jQuery || document.write('<script src=\"{{ asset('assets/js/vendor/jquery.min.js')}}\"><\\/script>')</script>
\t    <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
\t    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
\t    <script src=\"{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}\"></script>
\t</body>
</html>
", "DevLeaguesBundle::base.html.twig", "/var/www/html/devleagues/src/DevLeaguesBundle/Resources/views/base.html.twig");
    }
}

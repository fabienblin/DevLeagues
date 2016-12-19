<?php

/* DevLeaguesBundle::base.html.twig */
class __TwigTemplate_8cb4927b35895f6d64b85187030f4ddeb21ef2ad54997defe5e144a910085f96 extends Twig_Template
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
        $__internal_e4c024d0ad9f53544847d65d19c744b16e4f462a3167dd2936c6cb013dba5493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c024d0ad9f53544847d65d19c744b16e4f462a3167dd2936c6cb013dba5493->enter($__internal_e4c024d0ad9f53544847d65d19c744b16e4f462a3167dd2936c6cb013dba5493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

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
\t\t\t\t<div class=\"sidebar col-sm-3\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t";
        // line 36
        echo twig_include($this->env, $context, "DevLeaguesBundle::sidebar.html.twig");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<div class=\"body container-fluid\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Library</a></li>
\t\t\t\t\t\t\t<li class=\"active\">Data</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t    </div><!-- /.container -->

\t    <!-- Bootstrap core JavaScript
\t    ================================================== -->
\t    <!-- Placed at the end of the document so the pages load faster -->
\t    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t    <script>window.jQuery || document.write('<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendor/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
\t    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
\t    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>
";
        
        $__internal_e4c024d0ad9f53544847d65d19c744b16e4f462a3167dd2936c6cb013dba5493->leave($__internal_e4c024d0ad9f53544847d65d19c744b16e4f462a3167dd2936c6cb013dba5493_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_a02791443dd75dbcbf91a91775eecf327897e72c0396062c43e78c30a0ac19c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02791443dd75dbcbf91a91775eecf327897e72c0396062c43e78c30a0ac19c9->enter($__internal_a02791443dd75dbcbf91a91775eecf327897e72c0396062c43e78c30a0ac19c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a02791443dd75dbcbf91a91775eecf327897e72c0396062c43e78c30a0ac19c9->leave($__internal_a02791443dd75dbcbf91a91775eecf327897e72c0396062c43e78c30a0ac19c9_prof);

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
        return array (  118 => 46,  107 => 59,  102 => 57,  98 => 56,  87 => 47,  85 => 46,  72 => 36,  64 => 31,  51 => 21,  45 => 18,  39 => 15,  23 => 1,);
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
\t\t\t\t<div class=\"sidebar col-sm-3\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t{{ include('DevLeaguesBundle::sidebar.html.twig') }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<div class=\"body container-fluid\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Library</a></li>
\t\t\t\t\t\t\t<li class=\"active\">Data</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t</div>
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
", "DevLeaguesBundle::base.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/base.html.twig");
    }
}

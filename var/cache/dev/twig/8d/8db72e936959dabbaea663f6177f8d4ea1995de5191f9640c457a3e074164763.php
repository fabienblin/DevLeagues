<?php

/* ::base.html.twig */
class __TwigTemplate_ec087bddaa24c50ac4a199105c4534e04ef8a0ff2865384d585fd16527e595f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ee68f1ac42ede493e45698e1009aa1c265a8cb48a11a236236575962e5c88fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee68f1ac42ede493e45698e1009aa1c265a8cb48a11a236236575962e5c88fb->enter($__internal_9ee68f1ac42ede493e45698e1009aa1c265a8cb48a11a236236575962e5c88fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9ee68f1ac42ede493e45698e1009aa1c265a8cb48a11a236236575962e5c88fb->leave($__internal_9ee68f1ac42ede493e45698e1009aa1c265a8cb48a11a236236575962e5c88fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ce0736254f3188cf13b44fcb6cf8ee1aff0b8be4f000d9e9b0b1b3575276762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce0736254f3188cf13b44fcb6cf8ee1aff0b8be4f000d9e9b0b1b3575276762->enter($__internal_1ce0736254f3188cf13b44fcb6cf8ee1aff0b8be4f000d9e9b0b1b3575276762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ce0736254f3188cf13b44fcb6cf8ee1aff0b8be4f000d9e9b0b1b3575276762->leave($__internal_1ce0736254f3188cf13b44fcb6cf8ee1aff0b8be4f000d9e9b0b1b3575276762_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34edac04eb487e17542253a8ebdb182b1216479cfdf763b23f02e9721822e727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34edac04eb487e17542253a8ebdb182b1216479cfdf763b23f02e9721822e727->enter($__internal_34edac04eb487e17542253a8ebdb182b1216479cfdf763b23f02e9721822e727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_34edac04eb487e17542253a8ebdb182b1216479cfdf763b23f02e9721822e727->leave($__internal_34edac04eb487e17542253a8ebdb182b1216479cfdf763b23f02e9721822e727_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_782f1d8f2c54ec987bdf97f02a80d85264ac9e331fbcf14b5f200bd17047c006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782f1d8f2c54ec987bdf97f02a80d85264ac9e331fbcf14b5f200bd17047c006->enter($__internal_782f1d8f2c54ec987bdf97f02a80d85264ac9e331fbcf14b5f200bd17047c006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_782f1d8f2c54ec987bdf97f02a80d85264ac9e331fbcf14b5f200bd17047c006->leave($__internal_782f1d8f2c54ec987bdf97f02a80d85264ac9e331fbcf14b5f200bd17047c006_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3403e8647f0dc4e88aacc29f884d165567684bcfb1e969243af412e76868b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3403e8647f0dc4e88aacc29f884d165567684bcfb1e969243af412e76868b2d->enter($__internal_f3403e8647f0dc4e88aacc29f884d165567684bcfb1e969243af412e76868b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f3403e8647f0dc4e88aacc29f884d165567684bcfb1e969243af412e76868b2d->leave($__internal_f3403e8647f0dc4e88aacc29f884d165567684bcfb1e969243af412e76868b2d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/devleagues/github/app/Resources/views/base.html.twig");
    }
}

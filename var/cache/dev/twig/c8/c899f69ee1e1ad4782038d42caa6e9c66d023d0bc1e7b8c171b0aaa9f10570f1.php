<?php

/* base.html.twig */
class __TwigTemplate_afc83842835ab1774e758f3272cf5089a0c1d07eee8eb2d549d358166973b725 extends Twig_Template
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
        $__internal_7fd8e8d4a7f87dc1a903540427729c973237605b326ffa64052e3f16e1a6f161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd8e8d4a7f87dc1a903540427729c973237605b326ffa64052e3f16e1a6f161->enter($__internal_7fd8e8d4a7f87dc1a903540427729c973237605b326ffa64052e3f16e1a6f161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_25e05922ed31fe7b061ba366353ab0ad7705dcbbd0ceb1e86e7b16136737e019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e05922ed31fe7b061ba366353ab0ad7705dcbbd0ceb1e86e7b16136737e019->enter($__internal_25e05922ed31fe7b061ba366353ab0ad7705dcbbd0ceb1e86e7b16136737e019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7fd8e8d4a7f87dc1a903540427729c973237605b326ffa64052e3f16e1a6f161->leave($__internal_7fd8e8d4a7f87dc1a903540427729c973237605b326ffa64052e3f16e1a6f161_prof);

        
        $__internal_25e05922ed31fe7b061ba366353ab0ad7705dcbbd0ceb1e86e7b16136737e019->leave($__internal_25e05922ed31fe7b061ba366353ab0ad7705dcbbd0ceb1e86e7b16136737e019_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41cd0cbcd70ad6b3ca8218cc06bac8779c8969cfb15f181373406044affed181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cd0cbcd70ad6b3ca8218cc06bac8779c8969cfb15f181373406044affed181->enter($__internal_41cd0cbcd70ad6b3ca8218cc06bac8779c8969cfb15f181373406044affed181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c566e2c363c6307e678d6233a08c6dbdf60fd19c48d74a797a8548e6efd80ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c566e2c363c6307e678d6233a08c6dbdf60fd19c48d74a797a8548e6efd80ae0->enter($__internal_c566e2c363c6307e678d6233a08c6dbdf60fd19c48d74a797a8548e6efd80ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Coucou tu veux voir mon git ?";
        
        $__internal_c566e2c363c6307e678d6233a08c6dbdf60fd19c48d74a797a8548e6efd80ae0->leave($__internal_c566e2c363c6307e678d6233a08c6dbdf60fd19c48d74a797a8548e6efd80ae0_prof);

        
        $__internal_41cd0cbcd70ad6b3ca8218cc06bac8779c8969cfb15f181373406044affed181->leave($__internal_41cd0cbcd70ad6b3ca8218cc06bac8779c8969cfb15f181373406044affed181_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_764b57073e39d9d8a7bcfe1b03743d1d584c29c0b6980159eb2cd07d9f005000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764b57073e39d9d8a7bcfe1b03743d1d584c29c0b6980159eb2cd07d9f005000->enter($__internal_764b57073e39d9d8a7bcfe1b03743d1d584c29c0b6980159eb2cd07d9f005000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3a7366f9c86002f99ca5ff45c94ae5a84d29055259f172983d73f17878cb356f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7366f9c86002f99ca5ff45c94ae5a84d29055259f172983d73f17878cb356f->enter($__internal_3a7366f9c86002f99ca5ff45c94ae5a84d29055259f172983d73f17878cb356f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3a7366f9c86002f99ca5ff45c94ae5a84d29055259f172983d73f17878cb356f->leave($__internal_3a7366f9c86002f99ca5ff45c94ae5a84d29055259f172983d73f17878cb356f_prof);

        
        $__internal_764b57073e39d9d8a7bcfe1b03743d1d584c29c0b6980159eb2cd07d9f005000->leave($__internal_764b57073e39d9d8a7bcfe1b03743d1d584c29c0b6980159eb2cd07d9f005000_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_390fe50b4709ce7b8ba72b39dd3a987d2b2aee9b78e64f8565dd3b2383cd31bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390fe50b4709ce7b8ba72b39dd3a987d2b2aee9b78e64f8565dd3b2383cd31bb->enter($__internal_390fe50b4709ce7b8ba72b39dd3a987d2b2aee9b78e64f8565dd3b2383cd31bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb2478b6fb7e97576e64860bbe2b6d2dfb00a3e528a32148026b8c823faac258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2478b6fb7e97576e64860bbe2b6d2dfb00a3e528a32148026b8c823faac258->enter($__internal_eb2478b6fb7e97576e64860bbe2b6d2dfb00a3e528a32148026b8c823faac258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb2478b6fb7e97576e64860bbe2b6d2dfb00a3e528a32148026b8c823faac258->leave($__internal_eb2478b6fb7e97576e64860bbe2b6d2dfb00a3e528a32148026b8c823faac258_prof);

        
        $__internal_390fe50b4709ce7b8ba72b39dd3a987d2b2aee9b78e64f8565dd3b2383cd31bb->leave($__internal_390fe50b4709ce7b8ba72b39dd3a987d2b2aee9b78e64f8565dd3b2383cd31bb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf3e460126584bb5aa5e0673d0569d83d2d773e6af4dba92ff0f8ff286429d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3e460126584bb5aa5e0673d0569d83d2d773e6af4dba92ff0f8ff286429d1b->enter($__internal_bf3e460126584bb5aa5e0673d0569d83d2d773e6af4dba92ff0f8ff286429d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1cc5125854504851afd08b97e1f1cacc3e7c242b777f2e99106ac7e597ffabf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc5125854504851afd08b97e1f1cacc3e7c242b777f2e99106ac7e597ffabf6->enter($__internal_1cc5125854504851afd08b97e1f1cacc3e7c242b777f2e99106ac7e597ffabf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1cc5125854504851afd08b97e1f1cacc3e7c242b777f2e99106ac7e597ffabf6->leave($__internal_1cc5125854504851afd08b97e1f1cacc3e7c242b777f2e99106ac7e597ffabf6_prof);

        
        $__internal_bf3e460126584bb5aa5e0673d0569d83d2d773e6af4dba92ff0f8ff286429d1b->leave($__internal_bf3e460126584bb5aa5e0673d0569d83d2d773e6af4dba92ff0f8ff286429d1b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Coucou tu veux voir mon git ?{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/devleagues/github/app/Resources/views/base.html.twig");
    }
}

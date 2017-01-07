<?php

/* DevLeaguesBundle::base.html.twig */
class __TwigTemplate_b72b9b0d24ef410e63c0128ac5f8e11529ce34d72343335ab0a627432adce578 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "DevLeaguesBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db322171bbc2ecb66d653be2719337bc0727ef7af58bb3f7f9c3dbc7e0636f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db322171bbc2ecb66d653be2719337bc0727ef7af58bb3f7f9c3dbc7e0636f4d->enter($__internal_db322171bbc2ecb66d653be2719337bc0727ef7af58bb3f7f9c3dbc7e0636f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        $__internal_8b751c7f4be9d77bc4873f9dbe9ab9c3384d784fef233f82d15a3740854040fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b751c7f4be9d77bc4873f9dbe9ab9c3384d784fef233f82d15a3740854040fe->enter($__internal_8b751c7f4be9d77bc4873f9dbe9ab9c3384d784fef233f82d15a3740854040fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db322171bbc2ecb66d653be2719337bc0727ef7af58bb3f7f9c3dbc7e0636f4d->leave($__internal_db322171bbc2ecb66d653be2719337bc0727ef7af58bb3f7f9c3dbc7e0636f4d_prof);

        
        $__internal_8b751c7f4be9d77bc4873f9dbe9ab9c3384d784fef233f82d15a3740854040fe->leave($__internal_8b751c7f4be9d77bc4873f9dbe9ab9c3384d784fef233f82d15a3740854040fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49a9ded64648ccceb47439120f307db4c75c6febf3384344f311c7f0b489ff62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a9ded64648ccceb47439120f307db4c75c6febf3384344f311c7f0b489ff62->enter($__internal_49a9ded64648ccceb47439120f307db4c75c6febf3384344f311c7f0b489ff62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7779fe251d9f0437965d4e78a229727dedcff8d0d80c139d15693b4fe68570fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7779fe251d9f0437965d4e78a229727dedcff8d0d80c139d15693b4fe68570fd->enter($__internal_7779fe251d9f0437965d4e78a229727dedcff8d0d80c139d15693b4fe68570fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    DevLeagues.com
";
        
        $__internal_7779fe251d9f0437965d4e78a229727dedcff8d0d80c139d15693b4fe68570fd->leave($__internal_7779fe251d9f0437965d4e78a229727dedcff8d0d80c139d15693b4fe68570fd_prof);

        
        $__internal_49a9ded64648ccceb47439120f307db4c75c6febf3384344f311c7f0b489ff62->leave($__internal_49a9ded64648ccceb47439120f307db4c75c6febf3384344f311c7f0b489ff62_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_97f9ff5fad3026343eac04db0845e842f565bc18df929d7d6b2dccc68695ecb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f9ff5fad3026343eac04db0845e842f565bc18df929d7d6b2dccc68695ecb1->enter($__internal_97f9ff5fad3026343eac04db0845e842f565bc18df929d7d6b2dccc68695ecb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_62aefdce07b9d0e4da0db49fb6ffd88de7e73f7617cc6dcf762266613a9c6a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62aefdce07b9d0e4da0db49fb6ffd88de7e73f7617cc6dcf762266613a9c6a70->enter($__internal_62aefdce07b9d0e4da0db49fb6ffd88de7e73f7617cc6dcf762266613a9c6a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "EMPTY Page";
        
        $__internal_62aefdce07b9d0e4da0db49fb6ffd88de7e73f7617cc6dcf762266613a9c6a70->leave($__internal_62aefdce07b9d0e4da0db49fb6ffd88de7e73f7617cc6dcf762266613a9c6a70_prof);

        
        $__internal_97f9ff5fad3026343eac04db0845e842f565bc18df929d7d6b2dccc68695ecb1->leave($__internal_97f9ff5fad3026343eac04db0845e842f565bc18df929d7d6b2dccc68695ecb1_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1b104c03dfaf55d0ff3b4c9ee3b3d3fae27aeee148fc5c5b95bace3c9b7b6513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b104c03dfaf55d0ff3b4c9ee3b3d3fae27aeee148fc5c5b95bace3c9b7b6513->enter($__internal_1b104c03dfaf55d0ff3b4c9ee3b3d3fae27aeee148fc5c5b95bace3c9b7b6513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_be617536ea68f98a69c5eccd0a529f03abc688b11acb2c3c67e76d3271d8dde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be617536ea68f98a69c5eccd0a529f03abc688b11acb2c3c67e76d3271d8dde7->enter($__internal_be617536ea68f98a69c5eccd0a529f03abc688b11acb2c3c67e76d3271d8dde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "This is a temporary EMPTY page of DevLeagues.com";
        
        $__internal_be617536ea68f98a69c5eccd0a529f03abc688b11acb2c3c67e76d3271d8dde7->leave($__internal_be617536ea68f98a69c5eccd0a529f03abc688b11acb2c3c67e76d3271d8dde7_prof);

        
        $__internal_1b104c03dfaf55d0ff3b4c9ee3b3d3fae27aeee148fc5c5b95bace3c9b7b6513->leave($__internal_1b104c03dfaf55d0ff3b4c9ee3b3d3fae27aeee148fc5c5b95bace3c9b7b6513_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_61777a69f25cc859d9119c8aafeffa45622c6ea8eac98bb99632e1a590cb8838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61777a69f25cc859d9119c8aafeffa45622c6ea8eac98bb99632e1a590cb8838->enter($__internal_61777a69f25cc859d9119c8aafeffa45622c6ea8eac98bb99632e1a590cb8838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_e85ebfb35ab9dd05668288789b91008bda034359555af42faebfcfd447d7b722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85ebfb35ab9dd05668288789b91008bda034359555af42faebfcfd447d7b722->enter($__internal_e85ebfb35ab9dd05668288789b91008bda034359555af42faebfcfd447d7b722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "            THIS PAGE IS EMPTY, FOR NOW
    ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_e85ebfb35ab9dd05668288789b91008bda034359555af42faebfcfd447d7b722->leave($__internal_e85ebfb35ab9dd05668288789b91008bda034359555af42faebfcfd447d7b722_prof);

        
        $__internal_61777a69f25cc859d9119c8aafeffa45622c6ea8eac98bb99632e1a590cb8838->leave($__internal_61777a69f25cc859d9119c8aafeffa45622c6ea8eac98bb99632e1a590cb8838_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_73df0afad842ec020d5dd8b77ba8481ea0e4f73974a090ec223136d42967ca67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73df0afad842ec020d5dd8b77ba8481ea0e4f73974a090ec223136d42967ca67->enter($__internal_73df0afad842ec020d5dd8b77ba8481ea0e4f73974a090ec223136d42967ca67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_450b6c660d23e05b19b439f7208c15a904e59f6a611bff4a675cb59380db82e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450b6c660d23e05b19b439f7208c15a904e59f6a611bff4a675cb59380db82e0->enter($__internal_450b6c660d23e05b19b439f7208c15a904e59f6a611bff4a675cb59380db82e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " THIS PAGE IS EMPTY";
        
        $__internal_450b6c660d23e05b19b439f7208c15a904e59f6a611bff4a675cb59380db82e0->leave($__internal_450b6c660d23e05b19b439f7208c15a904e59f6a611bff4a675cb59380db82e0_prof);

        
        $__internal_73df0afad842ec020d5dd8b77ba8481ea0e4f73974a090ec223136d42967ca67->leave($__internal_73df0afad842ec020d5dd8b77ba8481ea0e4f73974a090ec223136d42967ca67_prof);

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
        return array (  112 => 12,  109 => 11,  100 => 10,  82 => 8,  64 => 7,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block title %}
    DevLeagues.com
{% endblock %}

{% block page_title %}EMPTY Page{% endblock %}
{% block page_subtitle %}This is a temporary EMPTY page of DevLeagues.com{% endblock %}

{% block page_content %}
            THIS PAGE IS EMPTY, FOR NOW
    {% block body %} THIS PAGE IS EMPTY{% endblock %}
{% endblock %}", "DevLeaguesBundle::base.html.twig", "/home/ubuntu/workspace/DevLeagues/src/DevLeaguesBundle/Resources/views/base.html.twig");
    }
}

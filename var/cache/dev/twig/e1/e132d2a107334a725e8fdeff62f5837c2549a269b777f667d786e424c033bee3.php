<?php

/* @DevLeagues/User/show.html.twig */
class __TwigTemplate_f80aaa3fb5a72727faf3de834510a60c6d34520a8dc45bf9eb6a5acbd342c354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:User:index.html.twig", "@DevLeagues/User/show.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:User:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_badb7472c85b6d75d11c26e134fbc5e9c62209ce67b5e1b60f6f221bae5c0c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_badb7472c85b6d75d11c26e134fbc5e9c62209ce67b5e1b60f6f221bae5c0c20->enter($__internal_badb7472c85b6d75d11c26e134fbc5e9c62209ce67b5e1b60f6f221bae5c0c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/User/show.html.twig"));

        $__internal_9f574d4139006b7a8dbd4e2b2e4968df5d4d0c7c3e76306aeb68cf40815406bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f574d4139006b7a8dbd4e2b2e4968df5d4d0c7c3e76306aeb68cf40815406bd->enter($__internal_9f574d4139006b7a8dbd4e2b2e4968df5d4d0c7c3e76306aeb68cf40815406bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/User/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_badb7472c85b6d75d11c26e134fbc5e9c62209ce67b5e1b60f6f221bae5c0c20->leave($__internal_badb7472c85b6d75d11c26e134fbc5e9c62209ce67b5e1b60f6f221bae5c0c20_prof);

        
        $__internal_9f574d4139006b7a8dbd4e2b2e4968df5d4d0c7c3e76306aeb68cf40815406bd->leave($__internal_9f574d4139006b7a8dbd4e2b2e4968df5d4d0c7c3e76306aeb68cf40815406bd_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_232c0ba2dbdbb6503466682d797b54dae5bae529089d04209faacb6d0dc9c3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232c0ba2dbdbb6503466682d797b54dae5bae529089d04209faacb6d0dc9c3c2->enter($__internal_232c0ba2dbdbb6503466682d797b54dae5bae529089d04209faacb6d0dc9c3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_3a116b8cd3b833f749c49c130db549584398223ccbddca937621d4e6110b57e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a116b8cd3b833f749c49c130db549584398223ccbddca937621d4e6110b57e1->enter($__internal_3a116b8cd3b833f749c49c130db549584398223ccbddca937621d4e6110b57e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "EMPTY Page";
        
        $__internal_3a116b8cd3b833f749c49c130db549584398223ccbddca937621d4e6110b57e1->leave($__internal_3a116b8cd3b833f749c49c130db549584398223ccbddca937621d4e6110b57e1_prof);

        
        $__internal_232c0ba2dbdbb6503466682d797b54dae5bae529089d04209faacb6d0dc9c3c2->leave($__internal_232c0ba2dbdbb6503466682d797b54dae5bae529089d04209faacb6d0dc9c3c2_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9d1f01d1bee9611b96c25e3e896f842d67f59013a86c76e772fc97e20d21fb7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1f01d1bee9611b96c25e3e896f842d67f59013a86c76e772fc97e20d21fb7c->enter($__internal_9d1f01d1bee9611b96c25e3e896f842d67f59013a86c76e772fc97e20d21fb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_3dd89c437df709872a3df2ab3e138b4edbea6d0b0cd5629f72a64cd813cd4c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd89c437df709872a3df2ab3e138b4edbea6d0b0cd5629f72a64cd813cd4c64->enter($__internal_3dd89c437df709872a3df2ab3e138b4edbea6d0b0cd5629f72a64cd813cd4c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "This is a temporary EMPTY page of DevLeagues.com";
        
        $__internal_3dd89c437df709872a3df2ab3e138b4edbea6d0b0cd5629f72a64cd813cd4c64->leave($__internal_3dd89c437df709872a3df2ab3e138b4edbea6d0b0cd5629f72a64cd813cd4c64_prof);

        
        $__internal_9d1f01d1bee9611b96c25e3e896f842d67f59013a86c76e772fc97e20d21fb7c->leave($__internal_9d1f01d1bee9611b96c25e3e896f842d67f59013a86c76e772fc97e20d21fb7c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_24f659ea9dffe6386ac1383fe1431e4c38d3f4bfae7788ec6f8aaaa7da842ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f659ea9dffe6386ac1383fe1431e4c38d3f4bfae7788ec6f8aaaa7da842ed0->enter($__internal_24f659ea9dffe6386ac1383fe1431e4c38d3f4bfae7788ec6f8aaaa7da842ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90b41a7c938bc42cad1959a16ed97c814afb0c046a216c4ccebc29fc736342ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b41a7c938bc42cad1959a16ed97c814afb0c046a216c4ccebc29fc736342ed->enter($__internal_90b41a7c938bc42cad1959a16ed97c814afb0c046a216c4ccebc29fc736342ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>Welcome to the User:show page</h1>
";
        
        $__internal_90b41a7c938bc42cad1959a16ed97c814afb0c046a216c4ccebc29fc736342ed->leave($__internal_90b41a7c938bc42cad1959a16ed97c814afb0c046a216c4ccebc29fc736342ed_prof);

        
        $__internal_24f659ea9dffe6386ac1383fe1431e4c38d3f4bfae7788ec6f8aaaa7da842ed0->leave($__internal_24f659ea9dffe6386ac1383fe1431e4c38d3f4bfae7788ec6f8aaaa7da842ed0_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/User/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 7,  78 => 6,  60 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle:User:index.html.twig\" %}

{% block page_title %}EMPTY Page{% endblock %}
{% block page_subtitle %}This is a temporary EMPTY page of DevLeagues.com{% endblock %}

{% block body %}
<h1>Welcome to the User:show page</h1>
{% endblock %}
", "@DevLeagues/User/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/User/show.html.twig");
    }
}

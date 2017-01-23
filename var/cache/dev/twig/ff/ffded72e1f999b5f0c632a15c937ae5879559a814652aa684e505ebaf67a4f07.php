<?php

/* @DevLeagues/League/edit.html.twig */
class __TwigTemplate_0921c14a3af319f13bfe34e5d581fbdeb1dac598a89e514a64a790d1c0c1f8ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:League:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c6c233e097954d9ed7f4fbd47912d640092c6fa95a022eb1d773600a7ad3905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6c233e097954d9ed7f4fbd47912d640092c6fa95a022eb1d773600a7ad3905->enter($__internal_5c6c233e097954d9ed7f4fbd47912d640092c6fa95a022eb1d773600a7ad3905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/edit.html.twig"));

        $__internal_f47dddd38e656e298871f917857852a05d616a594bf3c030d9ecc7f55f245570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47dddd38e656e298871f917857852a05d616a594bf3c030d9ecc7f55f245570->enter($__internal_f47dddd38e656e298871f917857852a05d616a594bf3c030d9ecc7f55f245570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c6c233e097954d9ed7f4fbd47912d640092c6fa95a022eb1d773600a7ad3905->leave($__internal_5c6c233e097954d9ed7f4fbd47912d640092c6fa95a022eb1d773600a7ad3905_prof);

        
        $__internal_f47dddd38e656e298871f917857852a05d616a594bf3c030d9ecc7f55f245570->leave($__internal_f47dddd38e656e298871f917857852a05d616a594bf3c030d9ecc7f55f245570_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b8694b1b76ef7bcb7923204f596f823d857881482b43c237c9833c4929742ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8694b1b76ef7bcb7923204f596f823d857881482b43c237c9833c4929742ab->enter($__internal_1b8694b1b76ef7bcb7923204f596f823d857881482b43c237c9833c4929742ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7363407c062d28e3b253306f8a28321c05ca1eee0c6a01759a223fa6962eab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7363407c062d28e3b253306f8a28321c05ca1eee0c6a01759a223fa6962eab2->enter($__internal_b7363407c062d28e3b253306f8a28321c05ca1eee0c6a01759a223fa6962eab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:edit page</h1>
";
        
        $__internal_b7363407c062d28e3b253306f8a28321c05ca1eee0c6a01759a223fa6962eab2->leave($__internal_b7363407c062d28e3b253306f8a28321c05ca1eee0c6a01759a223fa6962eab2_prof);

        
        $__internal_1b8694b1b76ef7bcb7923204f596f823d857881482b43c237c9833c4929742ab->leave($__internal_1b8694b1b76ef7bcb7923204f596f823d857881482b43c237c9833c4929742ab_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle:League:base.html.twig\" %}

{% block body %}
<h1>Welcome to the League:edit page</h1>
{% endblock %}
", "@DevLeagues/League/edit.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/edit.html.twig");
    }
}

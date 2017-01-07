<?php

/* DevLeaguesBundle:Community:index.html.twig */
class __TwigTemplate_5fd2cfb270390f597243e1df65dbd3b3212a4cb4eacaed3f71176fa5cde2b0b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Community:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5713f7445b9806f54240ab5781e63fd5ccfbcb561d3e91f23edca50c7e609b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5713f7445b9806f54240ab5781e63fd5ccfbcb561d3e91f23edca50c7e609b0e->enter($__internal_5713f7445b9806f54240ab5781e63fd5ccfbcb561d3e91f23edca50c7e609b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Community:index.html.twig"));

        $__internal_6823eba59fffce8549ddb1f10ecce9df8fdf1764518f970c95584d5f13e9dc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6823eba59fffce8549ddb1f10ecce9df8fdf1764518f970c95584d5f13e9dc0f->enter($__internal_6823eba59fffce8549ddb1f10ecce9df8fdf1764518f970c95584d5f13e9dc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Community:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5713f7445b9806f54240ab5781e63fd5ccfbcb561d3e91f23edca50c7e609b0e->leave($__internal_5713f7445b9806f54240ab5781e63fd5ccfbcb561d3e91f23edca50c7e609b0e_prof);

        
        $__internal_6823eba59fffce8549ddb1f10ecce9df8fdf1764518f970c95584d5f13e9dc0f->leave($__internal_6823eba59fffce8549ddb1f10ecce9df8fdf1764518f970c95584d5f13e9dc0f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_020586f78008d462a7793793d381713528ebda5d0229165c4843adbb2e9db9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020586f78008d462a7793793d381713528ebda5d0229165c4843adbb2e9db9f1->enter($__internal_020586f78008d462a7793793d381713528ebda5d0229165c4843adbb2e9db9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3780708236c929d1e1bf66b653c29c20932953040d12de3cd987ef818700f0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3780708236c929d1e1bf66b653c29c20932953040d12de3cd987ef818700f0a2->enter($__internal_3780708236c929d1e1bf66b653c29c20932953040d12de3cd987ef818700f0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Community:index page</h1>
";
        
        $__internal_3780708236c929d1e1bf66b653c29c20932953040d12de3cd987ef818700f0a2->leave($__internal_3780708236c929d1e1bf66b653c29c20932953040d12de3cd987ef818700f0a2_prof);

        
        $__internal_020586f78008d462a7793793d381713528ebda5d0229165c4843adbb2e9db9f1->leave($__internal_020586f78008d462a7793793d381713528ebda5d0229165c4843adbb2e9db9f1_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Community:index.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}
<h1>Welcome to the Community:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Community:index.html.twig", "/home/ubuntu/workspace/DevLeagues/src/DevLeaguesBundle/Resources/views/Community/index.html.twig");
    }
}

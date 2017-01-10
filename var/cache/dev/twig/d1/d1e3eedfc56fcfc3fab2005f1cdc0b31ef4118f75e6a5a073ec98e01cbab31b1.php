<?php

/* @DevLeagues/League/show.html.twig */
class __TwigTemplate_5b33399d7e957f83a44c4c5520287bccb472a80886c89d86e5899367494764f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/show.html.twig", 1);
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
        $__internal_f076c989b02601b1d834db9ea536fd598608e934d7b49e5214c5df85ba5c9e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f076c989b02601b1d834db9ea536fd598608e934d7b49e5214c5df85ba5c9e6f->enter($__internal_f076c989b02601b1d834db9ea536fd598608e934d7b49e5214c5df85ba5c9e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/show.html.twig"));

        $__internal_8616e7e107a6c03a903fa19fdb3afd3b1d0c9db4f5ef4e5e64d283984a622cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8616e7e107a6c03a903fa19fdb3afd3b1d0c9db4f5ef4e5e64d283984a622cfe->enter($__internal_8616e7e107a6c03a903fa19fdb3afd3b1d0c9db4f5ef4e5e64d283984a622cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f076c989b02601b1d834db9ea536fd598608e934d7b49e5214c5df85ba5c9e6f->leave($__internal_f076c989b02601b1d834db9ea536fd598608e934d7b49e5214c5df85ba5c9e6f_prof);

        
        $__internal_8616e7e107a6c03a903fa19fdb3afd3b1d0c9db4f5ef4e5e64d283984a622cfe->leave($__internal_8616e7e107a6c03a903fa19fdb3afd3b1d0c9db4f5ef4e5e64d283984a622cfe_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b47975dc767fcad823501e5537445ed000a0facfea0708c77117d3b286e049e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b47975dc767fcad823501e5537445ed000a0facfea0708c77117d3b286e049e->enter($__internal_3b47975dc767fcad823501e5537445ed000a0facfea0708c77117d3b286e049e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a8ce37db33c0fecfecd74b5d05b9e8ce4328ea86e5ece8d472adf40cb7cdab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8ce37db33c0fecfecd74b5d05b9e8ce4328ea86e5ece8d472adf40cb7cdab2->enter($__internal_3a8ce37db33c0fecfecd74b5d05b9e8ce4328ea86e5ece8d472adf40cb7cdab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Welcome to the League:show page</h1>
";
        
        $__internal_3a8ce37db33c0fecfecd74b5d05b9e8ce4328ea86e5ece8d472adf40cb7cdab2->leave($__internal_3a8ce37db33c0fecfecd74b5d05b9e8ce4328ea86e5ece8d472adf40cb7cdab2_prof);

        
        $__internal_3b47975dc767fcad823501e5537445ed000a0facfea0708c77117d3b286e049e->leave($__internal_3b47975dc767fcad823501e5537445ed000a0facfea0708c77117d3b286e049e_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
<h1>Welcome to the League:show page</h1>
{% endblock %}
", "@DevLeagues/League/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/show.html.twig");
    }
}

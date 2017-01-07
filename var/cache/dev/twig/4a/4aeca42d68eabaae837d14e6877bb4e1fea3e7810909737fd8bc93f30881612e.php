<?php

/* @SonataAdmin/Helper/render_form_dismissable_errors.html.twig */
class __TwigTemplate_575bbd652b81352f3b373542ec2463890ecb98076b7f6968f6524d3cfa89665d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60b1062a1cb62cbfa2a3e6100be5d278d19ebfbf8439998442e3148b036dd384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b1062a1cb62cbfa2a3e6100be5d278d19ebfbf8439998442e3148b036dd384->enter($__internal_60b1062a1cb62cbfa2a3e6100be5d278d19ebfbf8439998442e3148b036dd384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig"));

        $__internal_f324bab87c241af7d0acaff09da52241b6bdefe037cf3552062af7365ddc8db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f324bab87c241af7d0acaff09da52241b6bdefe037cf3552062af7365ddc8db4->enter($__internal_f324bab87c241af7d0acaff09da52241b6bdefe037cf3552062af7365ddc8db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_60b1062a1cb62cbfa2a3e6100be5d278d19ebfbf8439998442e3148b036dd384->leave($__internal_60b1062a1cb62cbfa2a3e6100be5d278d19ebfbf8439998442e3148b036dd384_prof);

        
        $__internal_f324bab87c241af7d0acaff09da52241b6bdefe037cf3552062af7365ddc8db4->leave($__internal_f324bab87c241af7d0acaff09da52241b6bdefe037cf3552062af7365ddc8db4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for error in form.vars.errors %}
    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ error.message }}
    </div>
{% endfor %}
", "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Helper/render_form_dismissable_errors.html.twig");
    }
}

<?php

/* @SonataAdmin/Helper/render_form_dismissable_errors.html.twig */
class __TwigTemplate_2ac4fdb913d303f23e52f3e26ea182158842671eb1c5259c89aee6d4ec964e74 extends Twig_Template
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
        $__internal_f735091303bf47d27b8da332d0ec426798a65c66391bcc85917a47b6ae68bd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f735091303bf47d27b8da332d0ec426798a65c66391bcc85917a47b6ae68bd2e->enter($__internal_f735091303bf47d27b8da332d0ec426798a65c66391bcc85917a47b6ae68bd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig"));

        $__internal_89837864e5fa17cbb00387ae269df7c59d000c27be2da5ec8eac544edaf996cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89837864e5fa17cbb00387ae269df7c59d000c27be2da5ec8eac544edaf996cd->enter($__internal_89837864e5fa17cbb00387ae269df7c59d000c27be2da5ec8eac544edaf996cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array()));
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
        
        $__internal_f735091303bf47d27b8da332d0ec426798a65c66391bcc85917a47b6ae68bd2e->leave($__internal_f735091303bf47d27b8da332d0ec426798a65c66391bcc85917a47b6ae68bd2e_prof);

        
        $__internal_89837864e5fa17cbb00387ae269df7c59d000c27be2da5ec8eac544edaf996cd->leave($__internal_89837864e5fa17cbb00387ae269df7c59d000c27be2da5ec8eac544edaf996cd_prof);

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
", "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Helper/render_form_dismissable_errors.html.twig");
    }
}

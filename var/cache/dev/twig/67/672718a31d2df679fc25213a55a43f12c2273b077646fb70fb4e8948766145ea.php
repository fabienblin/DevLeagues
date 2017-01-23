<?php

/* @AvanzuAdminTheme/Sidebar/user-panel.html.twig */
class __TwigTemplate_b2513fea15aea6877d0e3aea3309bb966421dec570667b682ece13e0c907164c extends Twig_Template
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
        $__internal_5de796b45c868369138473c47863b97aa6e26a93c4f5b7571e524fd7ba22b0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de796b45c868369138473c47863b97aa6e26a93c4f5b7571e524fd7ba22b0b0->enter($__internal_5de796b45c868369138473c47863b97aa6e26a93c4f5b7571e524fd7ba22b0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig"));

        $__internal_5581fd0679acfe4dcb4abcb31aaf1334ba10dbaacf66034bf419daadec880250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5581fd0679acfe4dcb4abcb31aaf1334ba10dbaacf66034bf419daadec880250->enter($__internal_5581fd0679acfe4dcb4abcb31aaf1334ba10dbaacf66034bf419daadec880250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig", 1);
        // line 2
        echo "<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    ";
        // line 5
        echo $context["macro"]->getavatar($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "avatar", array()), $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()));
        echo "
    </div>
    <div class=\"pull-left info\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
";
        
        $__internal_5de796b45c868369138473c47863b97aa6e26a93c4f5b7571e524fd7ba22b0b0->leave($__internal_5de796b45c868369138473c47863b97aa6e26a93c4f5b7571e524fd7ba22b0b0_prof);

        
        $__internal_5581fd0679acfe4dcb4abcb31aaf1334ba10dbaacf66034bf419daadec880250->leave($__internal_5581fd0679acfe4dcb4abcb31aaf1334ba10dbaacf66034bf419daadec880250_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Sidebar/user-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  32 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    {{ macro.avatar(user.avatar, user.username)  }}
    </div>
    <div class=\"pull-left info\">
        <p>{{ user.name }}</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Sidebar/user-panel.html.twig");
    }
}

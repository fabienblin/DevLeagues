<?php

/* @AvanzuAdminTheme/Sidebar/user-panel.html.twig */
class __TwigTemplate_8f2ab4a3517d9c29773e3abc18ed9f5a030740b2e0a7e2bb23e808df7c619884 extends Twig_Template
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
        $__internal_e775e0bd6d07de2878a150d7430f68c61cf94637766ffe3ee79d30e8384040cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e775e0bd6d07de2878a150d7430f68c61cf94637766ffe3ee79d30e8384040cf->enter($__internal_e775e0bd6d07de2878a150d7430f68c61cf94637766ffe3ee79d30e8384040cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig"));

        $__internal_0f9d617267d44018761104ee18d07f320fb02d60e6158bebfd15daf574e11fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9d617267d44018761104ee18d07f320fb02d60e6158bebfd15daf574e11fa0->enter($__internal_0f9d617267d44018761104ee18d07f320fb02d60e6158bebfd15daf574e11fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig", 1);
        // line 2
        echo "<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    ";
        // line 5
        echo $context["macro"]->getavatar($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()));
        echo "
    </div>
    <div class=\"pull-left info\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
";
        
        $__internal_e775e0bd6d07de2878a150d7430f68c61cf94637766ffe3ee79d30e8384040cf->leave($__internal_e775e0bd6d07de2878a150d7430f68c61cf94637766ffe3ee79d30e8384040cf_prof);

        
        $__internal_0f9d617267d44018761104ee18d07f320fb02d60e6158bebfd15daf574e11fa0->leave($__internal_0f9d617267d44018761104ee18d07f320fb02d60e6158bebfd15daf574e11fa0_prof);

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
", "@AvanzuAdminTheme/Sidebar/user-panel.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/Sidebar/user-panel.html.twig");
    }
}

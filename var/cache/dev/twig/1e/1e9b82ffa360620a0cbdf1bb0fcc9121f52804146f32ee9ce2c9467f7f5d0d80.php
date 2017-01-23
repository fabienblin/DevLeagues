<?php

/* AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig */
class __TwigTemplate_cfcf3bf3e404daedb40be94b4cbbd1840af1a0161a8477af2eb68fddd72827bf extends Twig_Template
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
        $__internal_f91ebf98a65935ccad6b5dafa844795db2ddc422b84f5b6a3955f677baeac9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91ebf98a65935ccad6b5dafa844795db2ddc422b84f5b6a3955f677baeac9b6->enter($__internal_f91ebf98a65935ccad6b5dafa844795db2ddc422b84f5b6a3955f677baeac9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig"));

        $__internal_8e023cbd5d4fa8d9f5fce6fb93aff03c3a86d0c47c9d708d7d24f61f2cc5a599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e023cbd5d4fa8d9f5fce6fb93aff03c3a86d0c47c9d708d7d24f61f2cc5a599->enter($__internal_8e023cbd5d4fa8d9f5fce6fb93aff03c3a86d0c47c9d708d7d24f61f2cc5a599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig", 1);
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
        
        $__internal_f91ebf98a65935ccad6b5dafa844795db2ddc422b84f5b6a3955f677baeac9b6->leave($__internal_f91ebf98a65935ccad6b5dafa844795db2ddc422b84f5b6a3955f677baeac9b6_prof);

        
        $__internal_8e023cbd5d4fa8d9f5fce6fb93aff03c3a86d0c47c9d708d7d24f61f2cc5a599->leave($__internal_8e023cbd5d4fa8d9f5fce6fb93aff03c3a86d0c47c9d708d7d24f61f2cc5a599_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig";
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
", "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/Sidebar/user-panel.html.twig");
    }
}

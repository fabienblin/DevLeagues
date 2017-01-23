<?php

/* AvanzuAdminThemeBundle:Navbar:user.html.twig */
class __TwigTemplate_5a661bc0a2efba60b7651f3866e51a7cf9948d883ca02e028eafd19731afa80e extends Twig_Template
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
        $__internal_174473d299c2ac3e35367f7c0088948a33eae71246070a179b651bdb8f7d21b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174473d299c2ac3e35367f7c0088948a33eae71246070a179b651bdb8f7d21b3->enter($__internal_174473d299c2ac3e35367f7c0088948a33eae71246070a179b651bdb8f7d21b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Navbar:user.html.twig"));

        $__internal_c51b54e3c3a2618683b43f53a5cab303e9984893c354e380e08fbfddaefedd69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51b54e3c3a2618683b43f53a5cab303e9984893c354e380e08fbfddaefedd69->enter($__internal_c51b54e3c3a2618683b43f53a5cab303e9984893c354e380e08fbfddaefedd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Navbar:user.html.twig"));

        // line 1
        echo "<!-- User Account: style can be found in dropdown.less -->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:Navbar:user.html.twig", 2);
        // line 3
        echo "<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 5
        echo $context["macro"]->getavatar($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "avatar", array()), $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "user-image");
        echo "
        <span class=\"hidden-xs\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            ";
        // line 11
        echo $context["macro"]->getavatar($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "avatar", array()), $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()));
        echo "
            <p>
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "title", array()), "html", null, true);
        echo "
                <small>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Member since %date%", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "memberSince", array()), "m.Y")), "AvanzuAdminTheme"), "html", null, true);
        echo "</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class=\"user-body\">
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Followers</a>
            </div>
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Sales</a>
            </div>
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Friends</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_profile", array("userid" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "identifier", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"pull-right\">
                <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_logout");
        echo "\" class=\"btn btn-default btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign out", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a>
            </div>
        </li>
    </ul>
</li>
";
        
        $__internal_174473d299c2ac3e35367f7c0088948a33eae71246070a179b651bdb8f7d21b3->leave($__internal_174473d299c2ac3e35367f7c0088948a33eae71246070a179b651bdb8f7d21b3_prof);

        
        $__internal_c51b54e3c3a2618683b43f53a5cab303e9984893c354e380e08fbfddaefedd69->leave($__internal_c51b54e3c3a2618683b43f53a5cab303e9984893c354e380e08fbfddaefedd69_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Navbar:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  78 => 32,  57 => 14,  51 => 13,  46 => 11,  38 => 6,  34 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- User Account: style can be found in dropdown.less -->
{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        {{ macro.avatar(user.avatar, user.username, 'user-image') }}
        <span class=\"hidden-xs\">{{ user.name }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            {{ macro.avatar(user.avatar, user.username) }}
            <p>
                {{user.name}} - {{user.title}}
                <small>{{ 'Member since %date%'|trans({'%date%': user.memberSince|date('m.Y') }, 'AvanzuAdminTheme') }}</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class=\"user-body\">
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Followers</a>
            </div>
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Sales</a>
            </div>
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Friends</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"{{ path('avanzu_admin_profile', {'userid' : user.identifier}) }}\" class=\"btn btn-default btn-flat\">{{'Profile'|trans({}, 'AvanzuAdminTheme')}}</a>
            </div>
            <div class=\"pull-right\">
                <a href=\"{{ path('avanzu_admin_logout') }}\" class=\"btn btn-default btn-flat\">{{ 'Sign out'|trans({}, 'AvanzuAdminTheme') }}</a>
            </div>
        </li>
    </ul>
</li>
", "AvanzuAdminThemeBundle:Navbar:user.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/Navbar/user.html.twig");
    }
}

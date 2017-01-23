<?php

/* @AvanzuAdminTheme/Navbar/notifications.html.twig */
class __TwigTemplate_a5f8297d17f130c24d4ee3f953b4be476ce15c98a671ab88e6c171d0a103330e extends Twig_Template
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
        $__internal_236e3f522c384e3617b458d5f501a6501c4a6ab14bfb6c27b9547d055dab0b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236e3f522c384e3617b458d5f501a6501c4a6ab14bfb6c27b9547d055dab0b56->enter($__internal_236e3f522c384e3617b458d5f501a6501c4a6ab14bfb6c27b9547d055dab0b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Navbar/notifications.html.twig"));

        $__internal_072ef8b0d2afda89857623f8ee8ecb835b149b0f20d39c4b1f2010e163f8d6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072ef8b0d2afda89857623f8ee8ecb835b149b0f20d39c4b1f2010e163f8d6e0->enter($__internal_072ef8b0d2afda89857623f8ee8ecb835b149b0f20d39c4b1f2010e163f8d6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Navbar/notifications.html.twig"));

        // line 1
        echo "<!-- Notifications: style can be found in dropdown.less -->
<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-bell-o\"></i>
        <span class=\"label label-warning\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have %total% notifications", array("%total%" => ($context["total"] ?? $this->getContext($context, "total"))), "AvanzuAdminTheme"), "html", null, true);
        echo "</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 13
            echo "                    <li>
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_show_notification", array("notifyid" => $this->getAttribute($context["notice"], "identifier", array()))), "html", null, true);
            echo "\">
                            <i class=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "icon", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "type", array()), "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "message", array()), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_all_notifications");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View all", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a></li>
    </ul>
</li>";
        
        $__internal_236e3f522c384e3617b458d5f501a6501c4a6ab14bfb6c27b9547d055dab0b56->leave($__internal_236e3f522c384e3617b458d5f501a6501c4a6ab14bfb6c27b9547d055dab0b56_prof);

        
        $__internal_072ef8b0d2afda89857623f8ee8ecb835b149b0f20d39c4b1f2010e163f8d6e0->leave($__internal_072ef8b0d2afda89857623f8ee8ecb835b149b0f20d39c4b1f2010e163f8d6e0_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Navbar/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  69 => 19,  55 => 15,  51 => 14,  48 => 13,  44 => 12,  37 => 8,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Notifications: style can be found in dropdown.less -->
<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-bell-o\"></i>
        <span class=\"label label-warning\">{{ total }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">{{ 'You have %total% notifications'|trans({'%total%': total}, 'AvanzuAdminTheme') }}</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                {% for notice in notifications %}
                    <li>
                        <a href=\"{{ path('avanzu_admin_show_notification', {'notifyid':notice.identifier}) }}\">
                            <i class=\"{{ notice.icon }} {{ notice.type }}\"></i> {{notice.message}}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </li>
        <li class=\"footer\"><a href=\"{{ path('avanzu_admin_all_notifications') }}\">{{'View all'|trans({}, 'AvanzuAdminTheme')}}</a></li>
    </ul>
</li>", "@AvanzuAdminTheme/Navbar/notifications.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Navbar/notifications.html.twig");
    }
}

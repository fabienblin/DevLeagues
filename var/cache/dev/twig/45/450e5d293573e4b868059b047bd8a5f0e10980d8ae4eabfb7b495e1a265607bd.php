<?php

/* AvanzuAdminThemeBundle:Navbar:messages.html.twig */
class __TwigTemplate_e134d34bf642d0623703200db20d2301001d35164f3a1b9086799b0b35edad76 extends Twig_Template
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
        $__internal_2ac046f12388525f3b803c140d3ca20101f9f004191c7dfe8e10e37471a30c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac046f12388525f3b803c140d3ca20101f9f004191c7dfe8e10e37471a30c41->enter($__internal_2ac046f12388525f3b803c140d3ca20101f9f004191c7dfe8e10e37471a30c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Navbar:messages.html.twig"));

        $__internal_cdcb4f78d28a8d4d27be1e1497dc17d0ab5cd9bb4ee340765e061cc49c76009f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcb4f78d28a8d4d27be1e1497dc17d0ab5cd9bb4ee340765e061cc49c76009f->enter($__internal_cdcb4f78d28a8d4d27be1e1497dc17d0ab5cd9bb4ee340765e061cc49c76009f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Navbar:messages.html.twig"));

        // line 1
        echo "<!-- Messages: style can be found in dropdown.less-->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:Navbar:messages.html.twig", 2);
        // line 3
        echo "<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-envelope-o\"></i>
        <span class=\"label label-success\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have %total% messages", array("%total%" => ($context["total"] ?? $this->getContext($context, "total"))), "AvanzuAdminTheme"), "html", null, true);
        echo "</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 14
            echo "                    <li><!-- start message -->
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_show_message", array("messageid" => $this->getAttribute($context["msg"], "identifier", array()))), "html", null, true);
            echo "\">
                            <div class=\"pull-left\">
                                ";
            // line 17
            echo $context["macro"]->getavatar($this->getAttribute($this->getAttribute($context["msg"], "from", array()), "avatar", array()), $this->getAttribute($this->getAttribute($context["msg"], "from", array()), "username", array()));
            echo "
                            </div>
                            <h4>
                                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["msg"], "from", array()), "username", array()), "html", null, true);
            echo "
                                <small><i class=\"fa fa-clock-o\"></i> ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["msg"], "sentAt", array()), "d.m.Y H:i"), "html", null, true);
            echo "</small>
                            </h4>
                            <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "subject", array()), "html", null, true);
            echo "</p>
                        </a>
                    </li><!-- end message -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_all_messages");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See All Messages", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a></li>
    </ul>
</li>";
        
        $__internal_2ac046f12388525f3b803c140d3ca20101f9f004191c7dfe8e10e37471a30c41->leave($__internal_2ac046f12388525f3b803c140d3ca20101f9f004191c7dfe8e10e37471a30c41_prof);

        
        $__internal_cdcb4f78d28a8d4d27be1e1497dc17d0ab5cd9bb4ee340765e061cc49c76009f->leave($__internal_cdcb4f78d28a8d4d27be1e1497dc17d0ab5cd9bb4ee340765e061cc49c76009f_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Navbar:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  85 => 27,  75 => 23,  70 => 21,  66 => 20,  60 => 17,  55 => 15,  52 => 14,  48 => 13,  41 => 9,  35 => 6,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Messages: style can be found in dropdown.less-->
{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-envelope-o\"></i>
        <span class=\"label label-success\">{{ total }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">{{ 'You have %total% messages'|trans({'%total%':total}, 'AvanzuAdminTheme') }}</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                {% for msg in messages %}
                    <li><!-- start message -->
                        <a href=\"{{ path('avanzu_admin_show_message', {'messageid': msg.identifier}) }}\">
                            <div class=\"pull-left\">
                                {{ macro.avatar(msg.from.avatar, msg.from.username) }}
                            </div>
                            <h4>
                                {{ msg.from.username }}
                                <small><i class=\"fa fa-clock-o\"></i> {{ msg.sentAt|date('d.m.Y H:i') }}</small>
                            </h4>
                            <p>{{ msg.subject }}</p>
                        </a>
                    </li><!-- end message -->
                {% endfor %}
            </ul>
        </li>
        <li class=\"footer\"><a href=\"{{ path('avanzu_admin_all_messages') }}\">{{'See All Messages'|trans({}, 'AvanzuAdminTheme')}}</a></li>
    </ul>
</li>", "AvanzuAdminThemeBundle:Navbar:messages.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/Navbar/messages.html.twig");
    }
}

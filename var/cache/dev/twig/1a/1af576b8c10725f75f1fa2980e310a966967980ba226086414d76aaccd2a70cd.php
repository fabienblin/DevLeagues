<?php

/* @AvanzuAdminTheme/Navbar/messages.html.twig */
class __TwigTemplate_6717b0d01a64ec9ca51901d40dd8522fdde87c0cb83b0def8e1b95b3b3acdd44 extends Twig_Template
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
        $__internal_b49866e86579e32714b500482ad7c588d1143d61e9fe10dc10579a11e035cedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49866e86579e32714b500482ad7c588d1143d61e9fe10dc10579a11e035cedf->enter($__internal_b49866e86579e32714b500482ad7c588d1143d61e9fe10dc10579a11e035cedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Navbar/messages.html.twig"));

        $__internal_5d7284d8db44c48522f4d363399910b5991bf7c1f3cd4189c31a5f269bd03aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7284d8db44c48522f4d363399910b5991bf7c1f3cd4189c31a5f269bd03aea->enter($__internal_5d7284d8db44c48522f4d363399910b5991bf7c1f3cd4189c31a5f269bd03aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Navbar/messages.html.twig"));

        // line 1
        echo "<!-- Messages: style can be found in dropdown.less-->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@AvanzuAdminTheme/Navbar/messages.html.twig", 2);
        // line 3
        echo "<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-envelope-o\"></i>
        <span class=\"label label-success\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have %total% messages", array("%total%" => (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))), "AvanzuAdminTheme"), "html", null, true);
        echo "</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
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
        
        $__internal_b49866e86579e32714b500482ad7c588d1143d61e9fe10dc10579a11e035cedf->leave($__internal_b49866e86579e32714b500482ad7c588d1143d61e9fe10dc10579a11e035cedf_prof);

        
        $__internal_5d7284d8db44c48522f4d363399910b5991bf7c1f3cd4189c31a5f269bd03aea->leave($__internal_5d7284d8db44c48522f4d363399910b5991bf7c1f3cd4189c31a5f269bd03aea_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Navbar/messages.html.twig";
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
</li>", "@AvanzuAdminTheme/Navbar/messages.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/Navbar/messages.html.twig");
    }
}

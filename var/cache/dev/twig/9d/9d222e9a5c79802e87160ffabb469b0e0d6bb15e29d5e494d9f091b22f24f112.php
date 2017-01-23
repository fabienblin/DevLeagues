<?php

/* @AvanzuAdminTheme/Navbar/messages.html.twig */
class __TwigTemplate_2ede27267067634a1441478d7b8d0285866d50e57029732d81d29dbfb8394cde extends Twig_Template
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
        $__internal_5d13b58a070254104895a74e395c122894ccb3c0b2e077e2e73b85101c429495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d13b58a070254104895a74e395c122894ccb3c0b2e077e2e73b85101c429495->enter($__internal_5d13b58a070254104895a74e395c122894ccb3c0b2e077e2e73b85101c429495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Navbar/messages.html.twig"));

        $__internal_290db4d468a91403bb8cc536855bae1c3a38e6129399ac88854b9a84c15eb2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290db4d468a91403bb8cc536855bae1c3a38e6129399ac88854b9a84c15eb2a3->enter($__internal_290db4d468a91403bb8cc536855bae1c3a38e6129399ac88854b9a84c15eb2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Navbar/messages.html.twig"));

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
        
        $__internal_5d13b58a070254104895a74e395c122894ccb3c0b2e077e2e73b85101c429495->leave($__internal_5d13b58a070254104895a74e395c122894ccb3c0b2e077e2e73b85101c429495_prof);

        
        $__internal_290db4d468a91403bb8cc536855bae1c3a38e6129399ac88854b9a84c15eb2a3->leave($__internal_290db4d468a91403bb8cc536855bae1c3a38e6129399ac88854b9a84c15eb2a3_prof);

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
</li>", "@AvanzuAdminTheme/Navbar/messages.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Navbar/messages.html.twig");
    }
}

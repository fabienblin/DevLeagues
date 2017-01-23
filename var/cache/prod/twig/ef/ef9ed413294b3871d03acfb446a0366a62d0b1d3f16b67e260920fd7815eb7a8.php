<?php

/* AvanzuAdminThemeBundle:Navbar:messages.html.twig */
class __TwigTemplate_7742afd50e921ad20881bbcd8c77fb97aa7318e2f55f2a5054757131005b75e8 extends Twig_Template
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
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have %total% messages", array("%total%" => ($context["total"] ?? null)), "AvanzuAdminTheme"), "html", null, true);
        echo "</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
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
        return array (  83 => 29,  79 => 27,  69 => 23,  64 => 21,  60 => 20,  54 => 17,  49 => 15,  46 => 14,  42 => 13,  35 => 9,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AvanzuAdminThemeBundle:Navbar:messages.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Navbar/messages.html.twig");
    }
}

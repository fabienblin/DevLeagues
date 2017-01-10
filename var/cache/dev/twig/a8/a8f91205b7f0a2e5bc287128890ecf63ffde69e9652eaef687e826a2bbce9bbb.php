<?php

/* @SonataAdmin/CRUD/dashboard__action_create.html.twig */
class __TwigTemplate_4d345854ef0402dce763f17c9375c16cce8de277ca8b6d9a7a72b30311fb176f extends Twig_Template
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
        $__internal_4903e7b33dada9807b30242ca63d5d76b200ceff8705609dc2410d5590f4b7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4903e7b33dada9807b30242ca63d5d76b200ceff8705609dc2410d5590f4b7ae->enter($__internal_4903e7b33dada9807b30242ca63d5d76b200ceff8705609dc2410d5590f4b7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action_create.html.twig"));

        $__internal_9723e12e943a971db854220501025dabf34894b06aa013febc4dd798637f41eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9723e12e943a971db854220501025dabf34894b06aa013febc4dd798637f41eb->enter($__internal_9723e12e943a971db854220501025dabf34894b06aa013febc4dd798637f41eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action_create.html.twig"));

        // line 1
        if (twig_test_empty($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subClasses", array()))) {
            // line 2
            echo "    <a class=\"btn btn-link btn-flat\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()), "html", null, true);
            echo "\">
        <i class=\"fa fa-";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute(($context["action"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
    </a>
";
        } else {
            // line 7
            echo "    <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute(($context["action"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subclasses", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                // line 14
                echo "            <li>
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), (($this->getAttribute(($context["action"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
";
        }
        
        $__internal_4903e7b33dada9807b30242ca63d5d76b200ceff8705609dc2410d5590f4b7ae->leave($__internal_4903e7b33dada9807b30242ca63d5d76b200ceff8705609dc2410d5590f4b7ae_prof);

        
        $__internal_9723e12e943a971db854220501025dabf34894b06aa013febc4dd798637f41eb->leave($__internal_9723e12e943a971db854220501025dabf34894b06aa013febc4dd798637f41eb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/dashboard__action_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  63 => 15,  60 => 14,  56 => 13,  49 => 9,  45 => 8,  42 => 7,  36 => 4,  32 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if admin.subClasses is empty %}
    <a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
        <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
        {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
    </a>
{% else %}
    <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
        {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        {% for subclass in admin.subclasses|keys %}
            <li>
                <a href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">{{ subclass|trans({}, action.translation_domain|default('SonataAdminBundle')) }}</a>
            </li>
        {% endfor %}
    </ul>
{% endif %}
", "@SonataAdmin/CRUD/dashboard__action_create.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/dashboard__action_create.html.twig");
    }
}

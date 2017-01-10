<?php

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_e82f16e2b76271683835e61941d6156dca582fcad05f5eb2febbc432a758f37e extends Twig_Template
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
        $__internal_25c418f7010eb63f07c250b300c3876bddc22dbd55fba9588ee539b69d4b17a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c418f7010eb63f07c250b300c3876bddc22dbd55fba9588ee539b69d4b17a1->enter($__internal_25c418f7010eb63f07c250b300c3876bddc22dbd55fba9588ee539b69d4b17a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        $__internal_83755879a410aecb0a71887eeec0f2fc67d02cf5cf1774e1a4055703a2de6714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83755879a410aecb0a71887eeec0f2fc67d02cf5cf1774e1a4055703a2de6714->enter($__internal_83755879a410aecb0a71887eeec0f2fc67d02cf5cf1774e1a4055703a2de6714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["revision"] ?? $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_25c418f7010eb63f07c250b300c3876bddc22dbd55fba9588ee539b69d4b17a1->leave($__internal_25c418f7010eb63f07c250b300c3876bddc22dbd55fba9588ee539b69d4b17a1_prof);

        
        $__internal_83755879a410aecb0a71887eeec0f2fc67d02cf5cf1774e1a4055703a2de6714->leave($__internal_83755879a410aecb0a71887eeec0f2fc67d02cf5cf1774e1a4055703a2de6714_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{{ revision.timestamp|date }}
", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}

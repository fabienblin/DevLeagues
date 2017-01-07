<?php

/* @SonataAdmin/Button/acl_button.html.twig */
class __TwigTemplate_f2578c501c302de3abf7ded8652d8c6f6d1e70ab5698ab06e4de700633fe4a31 extends Twig_Template
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
        $__internal_56d4c1ad4442f0840a2def739c17e586f134f75b2694ee6bdd3e03a41ea48767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d4c1ad4442f0840a2def739c17e586f134f75b2694ee6bdd3e03a41ea48767->enter($__internal_56d4c1ad4442f0840a2def739c17e586f134f75b2694ee6bdd3e03a41ea48767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/acl_button.html.twig"));

        $__internal_9cf8e088b57d4049b4f8a4ca8111722a8724f1eee7f450aad1c4241c9b92af4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf8e088b57d4049b4f8a4ca8111722a8724f1eee7f450aad1c4241c9b92af4b->enter($__internal_9cf8e088b57d4049b4f8a4ca8111722a8724f1eee7f450aad1c4241c9b92af4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/acl_button.html.twig"));

        // line 11
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method"))) {
            // line 12
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_56d4c1ad4442f0840a2def739c17e586f134f75b2694ee6bdd3e03a41ea48767->leave($__internal_56d4c1ad4442f0840a2def739c17e586f134f75b2694ee6bdd3e03a41ea48767_prof);

        
        $__internal_9cf8e088b57d4049b4f8a4ca8111722a8724f1eee7f450aad1c4241c9b92af4b->leave($__internal_9cf8e088b57d4049b4f8a4ca8111722a8724f1eee7f450aad1c4241c9b92af4b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  27 => 12,  25 => 11,);
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
{% if admin.isAclEnabled() and admin.canAccessObject('acl', object) and admin.hasRoute('acl') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('acl', object) }}\">
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        {{ 'link_action_acl'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "@SonataAdmin/Button/acl_button.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Button/acl_button.html.twig");
    }
}

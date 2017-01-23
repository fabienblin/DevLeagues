<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_eb5c76d16dad8db4a9d27a03477618cbd0a83490a8b619c4381cb8f73690578c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9dc0b3a5e4df9a33070c47fffee2c67f32eda522f0981c727f6aa396b3b3fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9dc0b3a5e4df9a33070c47fffee2c67f32eda522f0981c727f6aa396b3b3fe1->enter($__internal_f9dc0b3a5e4df9a33070c47fffee2c67f32eda522f0981c727f6aa396b3b3fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_bda797f6b88e47d8d2953eabd99fa9d736b05c44ca061f185ddf9823caebdf3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda797f6b88e47d8d2953eabd99fa9d736b05c44ca061f185ddf9823caebdf3a->enter($__internal_bda797f6b88e47d8d2953eabd99fa9d736b05c44ca061f185ddf9823caebdf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f9dc0b3a5e4df9a33070c47fffee2c67f32eda522f0981c727f6aa396b3b3fe1->leave($__internal_f9dc0b3a5e4df9a33070c47fffee2c67f32eda522f0981c727f6aa396b3b3fe1_prof);

        
        $__internal_bda797f6b88e47d8d2953eabd99fa9d736b05c44ca061f185ddf9823caebdf3a->leave($__internal_bda797f6b88e47d8d2953eabd99fa9d736b05c44ca061f185ddf9823caebdf3a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f400ee4fc41a4f4e8a849602d7f9b37696936ca52e4b56cb2fcbcc24775dae4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f400ee4fc41a4f4e8a849602d7f9b37696936ca52e4b56cb2fcbcc24775dae4d->enter($__internal_f400ee4fc41a4f4e8a849602d7f9b37696936ca52e4b56cb2fcbcc24775dae4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1c2fca9bd3ac68867afdb6485b67fffd8a7fcced4b35d4616875d09e53ad38d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2fca9bd3ac68867afdb6485b67fffd8a7fcced4b35d4616875d09e53ad38d5->enter($__internal_1c2fca9bd3ac68867afdb6485b67fffd8a7fcced4b35d4616875d09e53ad38d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_1c2fca9bd3ac68867afdb6485b67fffd8a7fcced4b35d4616875d09e53ad38d5->leave($__internal_1c2fca9bd3ac68867afdb6485b67fffd8a7fcced4b35d4616875d09e53ad38d5_prof);

        
        $__internal_f400ee4fc41a4f4e8a849602d7f9b37696936ca52e4b56cb2fcbcc24775dae4d->leave($__internal_f400ee4fc41a4f4e8a849602d7f9b37696936ca52e4b56cb2fcbcc24775dae4d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_79b7fc581d1b1e07b67c8fb08d01cd2ed00c52e5b5e256374a49e3e00ee237d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b7fc581d1b1e07b67c8fb08d01cd2ed00c52e5b5e256374a49e3e00ee237d0->enter($__internal_79b7fc581d1b1e07b67c8fb08d01cd2ed00c52e5b5e256374a49e3e00ee237d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_22bfbf5d50fddb517204dde44e78f46b7ef3c6e279afed37367abbcd2648ac45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bfbf5d50fddb517204dde44e78f46b7ef3c6e279afed37367abbcd2648ac45->enter($__internal_22bfbf5d50fddb517204dde44e78f46b7ef3c6e279afed37367abbcd2648ac45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_22bfbf5d50fddb517204dde44e78f46b7ef3c6e279afed37367abbcd2648ac45->leave($__internal_22bfbf5d50fddb517204dde44e78f46b7ef3c6e279afed37367abbcd2648ac45_prof);

        
        $__internal_79b7fc581d1b1e07b67c8fb08d01cd2ed00c52e5b5e256374a49e3e00ee237d0->leave($__internal_79b7fc581d1b1e07b67c8fb08d01cd2ed00c52e5b5e256374a49e3e00ee237d0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4a3bd05a8ed0a1502ad4fdeb60db3b003794976b627f6d1a0dc92b17260c3208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3bd05a8ed0a1502ad4fdeb60db3b003794976b627f6d1a0dc92b17260c3208->enter($__internal_4a3bd05a8ed0a1502ad4fdeb60db3b003794976b627f6d1a0dc92b17260c3208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_67fc413677dc436e1a8007fe192930415bc686013757a8b847f880252b857d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fc413677dc436e1a8007fe192930415bc686013757a8b847f880252b857d4e->enter($__internal_67fc413677dc436e1a8007fe192930415bc686013757a8b847f880252b857d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_67fc413677dc436e1a8007fe192930415bc686013757a8b847f880252b857d4e->leave($__internal_67fc413677dc436e1a8007fe192930415bc686013757a8b847f880252b857d4e_prof);

        
        $__internal_4a3bd05a8ed0a1502ad4fdeb60db3b003794976b627f6d1a0dc92b17260c3208->leave($__internal_4a3bd05a8ed0a1502ad4fdeb60db3b003794976b627f6d1a0dc92b17260c3208_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}

<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_90610fdea5b05d8821841eb678e5cfed5e9e9e45e485ac95f040123bea1a74db extends Twig_Template
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
        $__internal_9906e7c6348316eb6ff8e1635d0a2a3e457a5f4f12e951415862227d0747db07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9906e7c6348316eb6ff8e1635d0a2a3e457a5f4f12e951415862227d0747db07->enter($__internal_9906e7c6348316eb6ff8e1635d0a2a3e457a5f4f12e951415862227d0747db07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_757b6589e28aefb121cae628b0178ece788703801ca15703b6dc8c586c66998e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757b6589e28aefb121cae628b0178ece788703801ca15703b6dc8c586c66998e->enter($__internal_757b6589e28aefb121cae628b0178ece788703801ca15703b6dc8c586c66998e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9906e7c6348316eb6ff8e1635d0a2a3e457a5f4f12e951415862227d0747db07->leave($__internal_9906e7c6348316eb6ff8e1635d0a2a3e457a5f4f12e951415862227d0747db07_prof);

        
        $__internal_757b6589e28aefb121cae628b0178ece788703801ca15703b6dc8c586c66998e->leave($__internal_757b6589e28aefb121cae628b0178ece788703801ca15703b6dc8c586c66998e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_feeda7c6749b17b10d8aaca310aed4dda3889f2dff9982ac67bd50afc1178c40 extends Twig_Template
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
        $__internal_e3726a99e17393c5f31ee313779e7492317454217044def515b891fb28d0b3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3726a99e17393c5f31ee313779e7492317454217044def515b891fb28d0b3f5->enter($__internal_e3726a99e17393c5f31ee313779e7492317454217044def515b891fb28d0b3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_61a457ad7f226431437e634f9b73c4164dc65215c37402ace1a1c08a2d254bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a457ad7f226431437e634f9b73c4164dc65215c37402ace1a1c08a2d254bc6->enter($__internal_61a457ad7f226431437e634f9b73c4164dc65215c37402ace1a1c08a2d254bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e3726a99e17393c5f31ee313779e7492317454217044def515b891fb28d0b3f5->leave($__internal_e3726a99e17393c5f31ee313779e7492317454217044def515b891fb28d0b3f5_prof);

        
        $__internal_61a457ad7f226431437e634f9b73c4164dc65215c37402ace1a1c08a2d254bc6->leave($__internal_61a457ad7f226431437e634f9b73c4164dc65215c37402ace1a1c08a2d254bc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

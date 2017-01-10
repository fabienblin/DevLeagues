<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c9d583731c0ef618e816c367a73ff594613c4af236efff333e249b319588566d extends Twig_Template
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
        $__internal_8498a8e0c2949ad8d9048dc28e071a18df7874d26fc91c6297b38bc7c36a0e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8498a8e0c2949ad8d9048dc28e071a18df7874d26fc91c6297b38bc7c36a0e37->enter($__internal_8498a8e0c2949ad8d9048dc28e071a18df7874d26fc91c6297b38bc7c36a0e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5dcebed3de58485d1d16eee339c8aab54fa832fcf37161fec0651e4415a66190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcebed3de58485d1d16eee339c8aab54fa832fcf37161fec0651e4415a66190->enter($__internal_5dcebed3de58485d1d16eee339c8aab54fa832fcf37161fec0651e4415a66190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8498a8e0c2949ad8d9048dc28e071a18df7874d26fc91c6297b38bc7c36a0e37->leave($__internal_8498a8e0c2949ad8d9048dc28e071a18df7874d26fc91c6297b38bc7c36a0e37_prof);

        
        $__internal_5dcebed3de58485d1d16eee339c8aab54fa832fcf37161fec0651e4415a66190->leave($__internal_5dcebed3de58485d1d16eee339c8aab54fa832fcf37161fec0651e4415a66190_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

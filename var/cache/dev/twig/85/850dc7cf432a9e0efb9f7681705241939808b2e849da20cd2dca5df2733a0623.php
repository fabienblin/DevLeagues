<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a38a6787b2257af39c00bf6bc51ab452273f2074d1f3811f8fd7e1c96403dc8d extends Twig_Template
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
        $__internal_a286c48488da20418fb3e6c9380a60ddd0510638235f47ee5bc4f7245d77b73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a286c48488da20418fb3e6c9380a60ddd0510638235f47ee5bc4f7245d77b73b->enter($__internal_a286c48488da20418fb3e6c9380a60ddd0510638235f47ee5bc4f7245d77b73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f48d28c81ea7b3d1843d46b49e23b1b6aa3c87052e19788817e78ee77fee5eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48d28c81ea7b3d1843d46b49e23b1b6aa3c87052e19788817e78ee77fee5eb9->enter($__internal_f48d28c81ea7b3d1843d46b49e23b1b6aa3c87052e19788817e78ee77fee5eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a286c48488da20418fb3e6c9380a60ddd0510638235f47ee5bc4f7245d77b73b->leave($__internal_a286c48488da20418fb3e6c9380a60ddd0510638235f47ee5bc4f7245d77b73b_prof);

        
        $__internal_f48d28c81ea7b3d1843d46b49e23b1b6aa3c87052e19788817e78ee77fee5eb9->leave($__internal_f48d28c81ea7b3d1843d46b49e23b1b6aa3c87052e19788817e78ee77fee5eb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

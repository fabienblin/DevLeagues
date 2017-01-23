<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_6371f991a2dd2e7281e77957e564c35f19e19b6c01d0d1675d16ec84e3d0fab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d74de38e6d4f90a7d6d5b043efde339d39a73d628c18db49f466ad9e50ecc982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74de38e6d4f90a7d6d5b043efde339d39a73d628c18db49f466ad9e50ecc982->enter($__internal_d74de38e6d4f90a7d6d5b043efde339d39a73d628c18db49f466ad9e50ecc982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_5c2ff9bd76ee637d80bbb3888f73c359dcaa8ed2aed8c7a0024eae2851ef1e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2ff9bd76ee637d80bbb3888f73c359dcaa8ed2aed8c7a0024eae2851ef1e70->enter($__internal_5c2ff9bd76ee637d80bbb3888f73c359dcaa8ed2aed8c7a0024eae2851ef1e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d74de38e6d4f90a7d6d5b043efde339d39a73d628c18db49f466ad9e50ecc982->leave($__internal_d74de38e6d4f90a7d6d5b043efde339d39a73d628c18db49f466ad9e50ecc982_prof);

        
        $__internal_5c2ff9bd76ee637d80bbb3888f73c359dcaa8ed2aed8c7a0024eae2851ef1e70->leave($__internal_5c2ff9bd76ee637d80bbb3888f73c359dcaa8ed2aed8c7a0024eae2851ef1e70_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5a21ef457c09d7e4572f23c89458c5c78198ff3d26c184da6f318403dadf2cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a21ef457c09d7e4572f23c89458c5c78198ff3d26c184da6f318403dadf2cad->enter($__internal_5a21ef457c09d7e4572f23c89458c5c78198ff3d26c184da6f318403dadf2cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_7118b102f0d286b98655d112323f03a54a429277e60c6cac86e8b44d3e12359d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7118b102f0d286b98655d112323f03a54a429277e60c6cac86e8b44d3e12359d->enter($__internal_7118b102f0d286b98655d112323f03a54a429277e60c6cac86e8b44d3e12359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "<div class=\"register-logo\">
    <a href=\"../../index2.html\"><b>DevLeagues</b></a>
  </div>

  <div class=\"register-box-body\">
    <p class=\"login-box-msg\">Register a new DevLeagues user</p>

    <form action=\"../../index.html\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Username\">
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Retype password\">
        <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\"> I agree to the <a href=\"#\">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class=\"social-auth-links text-center\">
      <p>- OR -</p>
      <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using
        Facebook</a>
      <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign up using
        Google+</a>
    </div>

    <a href=\"home.html\" class=\"text-center\">I already have an account</a> <!--TODO A CHANGER-->
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src=\"../../plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"../../bootstrap/js/bootstrap.min.js\"></script>
<!-- iCheck -->
<script src=\"../../plugins/iCheck/icheck.min.js\"></script>
<script>
  \$(function () {
    \$('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
";
        
        $__internal_7118b102f0d286b98655d112323f03a54a429277e60c6cac86e8b44d3e12359d->leave($__internal_7118b102f0d286b98655d112323f03a54a429277e60c6cac86e8b44d3e12359d_prof);

        
        $__internal_5a21ef457c09d7e4572f23c89458c5c78198ff3d26c184da6f318403dadf2cad->leave($__internal_5a21ef457c09d7e4572f23c89458c5c78198ff3d26c184da6f318403dadf2cad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AvanzuAdminThemeBundle:layout:login-layout.html.twig\" %}

{% block page_content %}
<div class=\"register-logo\">
    <a href=\"../../index2.html\"><b>DevLeagues</b></a>
  </div>

  <div class=\"register-box-body\">
    <p class=\"login-box-msg\">Register a new DevLeagues user</p>

    <form action=\"../../index.html\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Username\">
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Retype password\">
        <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\"> I agree to the <a href=\"#\">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class=\"social-auth-links text-center\">
      <p>- OR -</p>
      <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using
        Facebook</a>
      <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign up using
        Google+</a>
    </div>

    <a href=\"home.html\" class=\"text-center\">I already have an account</a> <!--TODO A CHANGER-->
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src=\"../../plugins/jQuery/jquery-2.2.3.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"../../bootstrap/js/bootstrap.min.js\"></script>
<!-- iCheck -->
<script src=\"../../plugins/iCheck/icheck.min.js\"></script>
<script>
  \$(function () {
    \$('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
{% endblock %}
", "@FOSUser/Registration/register.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
